<?php

namespace HighLevel\Webhook;

use HighLevel\Logging\Logger;
use HighLevel\Storage\SessionData;
use HighLevel\Storage\SessionStorage;

/**
 * WebhookManager handles incoming webhooks from GoHighLevel
 * Provides webhook verification and automatic session management
 * 
 * @package HighLevel\Webhook
 */
class WebhookManager
{
    /**
     * Logger instance
     * @var Logger
     */
    private Logger $logger;

    /**
     * Session storage instance
     * @var SessionStorage
     */
    private SessionStorage $sessionStorage;

    /**
     * OAuth service instance
     * @var mixed
     */
    private $oauthService;

    /**
     * Create a new WebhookManager instance
     * 
     * @param Logger $logger Logger instance
     * @param SessionStorage $sessionStorage Session storage instance
     * @param mixed $oauthService OAuth service instance
     */
    public function __construct(
        Logger $logger,
        SessionStorage $sessionStorage,
        $oauthService
    ) {
        $this->logger = $logger;
        $this->sessionStorage = $sessionStorage;
        $this->oauthService = $oauthService;
    }

    /**
     * Process a webhook request
     * For all webhooks, it will validate the webhook signature if provided.
     * This method will handle INSTALL and UNINSTALL webhooks.
     * It will automatically generate token and store it for INSTALL webhook event
     * It will automatically remove token for UNINSTALL webhook event
     *
     * Two signature schemes are supported:
     *  - Ed25519 via the `x-ghl-signature` header — preferred when present
     *  - RSA-SHA256 via the `x-wh-signature` header — legacy/fallback
     * If both are passed in, Ed25519 takes precedence (matching the JS SDK).
     *
     * Public keys and the client id are read from environment variables — callers
     * only pass the raw payload and the signature header value(s):
     *  - RSA public key:     env `WEBHOOK_PUBLIC_KEY`
     *  - Ed25519 public key: env `WEBHOOK_SIGNATURE_PUBLIC_KEY`
     *  - OAuth client id:    env `CLIENT_ID` (used for appId validation)
     *
     * @param string $payload Webhook payload (raw request body)
     * @param string|null $signature Webhook signature from `x-wh-signature` header (RSA-SHA256, base64)
     * @param string|null $ghlSignature Webhook signature from `x-ghl-signature` header (Ed25519, base64)
     * @return array<string, mixed> Processing result with status and metadata
     */
    public function processWebhook(
        string $payload,
        ?string $signature = null,
        ?string $ghlSignature = null
    ): array {
        $this->logger->debug('Webhook received', $payload);

        $publicKey = $this->readEnv('WEBHOOK_PUBLIC_KEY');
        $ed25519PublicKey = $this->readEnv('WEBHOOK_SIGNATURE_PUBLIC_KEY');
        $clientId = $this->readEnv('CLIENT_ID');

        try {
            // Validate app ID if client ID is provided
            $requestBody = json_decode($payload, true);
            if ($clientId) {
                $appId = explode('-', $clientId)[0];
                if (($requestBody['appId'] ?? '') !== $appId) {
                    $this->logger->warn('App ID mismatch, skipping webhook processing');
                    return [
                        'processed' => false,
                        'reason' => 'app_id_mismatch'
                    ];
                }
            }

            // Initialize flags
            $skippedSignatureVerification = false;
            $isSignatureValid = false;
            $signatureType = null;

            // Verify webhook signature
            // Prefer Ed25519 (x-ghl-signature) over RSA (x-wh-signature) when both are supplied.
            if ($ghlSignature && $ed25519PublicKey) {
                $signatureType = 'ed25519';
                $isSignatureValid = $this->verifyEd25519Signature($payload, $ghlSignature, $ed25519PublicKey);

                if (!$isSignatureValid) {
                    $this->logger->warn('Invalid webhook signature from x-ghl-signature');
                    return [
                        'processed' => false,
                        'reason' => 'invalid_signature',
                        'signatureType' => 'ed25519',
                        'signatureValid' => false
                    ];
                }
            } elseif ($signature && $publicKey) {
                $signatureType = 'rsa';
                $isSignatureValid = $this->verifySignature($payload, $signature, $publicKey);

                if (!$isSignatureValid) {
                    $this->logger->warn('Invalid webhook signature from x-wh-signature');
                    return [
                        'processed' => false,
                        'reason' => 'invalid_signature',
                        'signatureType' => 'rsa',
                        'signatureValid' => false
                    ];
                }
            } else {
                $this->logger->warn('Skipping signature verification - no supported webhook signature header found or missing public key');
                $skippedSignatureVerification = true;
            }

            // Process webhook based on type
            $webhookType = $requestBody['type'] ?? '';
            $companyId = $requestBody['companyId'] ?? null;
            $locationId = $requestBody['locationId'] ?? null;

            switch ($webhookType) {
                case 'INSTALL':
                    if ($companyId && $locationId) {
                        $this->generateLocationAccessToken($companyId, $locationId);
                    }
                    break;

                case 'UNINSTALL':
                    if ($locationId || $companyId) {
                        $resourceId = $locationId ?? $companyId;
                        $this->sessionStorage->deleteSession($resourceId);
                    }
                    break;
            }

            $this->logger->debug('Webhook processed successfully');
            
            return [
                'processed' => true,
                'type' => $webhookType,
                'signatureType' => $signatureType,
                'signatureValid' => $isSignatureValid,
                'skippedSignatureVerification' => $skippedSignatureVerification
            ];
        } catch (\Exception $error) {
            $this->logger->error('Webhook processing failed: ' . $error->getMessage());
            return [
                'processed' => false,
                'error' => $error->getMessage()
            ];
        }
    }

    /**
     * Verify webhook signature using GoHighLevel's public key
     * 
     * @param string $payload The JSON stringified request body
     * @param string $signature The signature from x-wh-signature header
     * @param string $publicKey The public key for verification
     * @return bool True if signature is valid, false otherwise
     */
    public function verifySignature(
        string $payload,
        string $signature,
        string $publicKey
    ): bool {
        try {
            $this->logger->debug('Verifying webhook signature');

            // Verify the signature using OpenSSL
            $verified = openssl_verify(
                $payload,
                base64_decode($signature),
                $publicKey,
                OPENSSL_ALGO_SHA256
            );

            return $verified === 1;
        } catch (\Exception $error) {
            $this->logger->error('Error verifying webhook signature: ' . $error->getMessage());
            return false;
        }
    }

    /**
     * Verify webhook signature using an Ed25519 public key.
     * Uses libsodium (PHP 7.2+ built-in) so no extra extension is required.
     *
     * @param string $payload The raw request body
     * @param string $signature The base64-encoded signature from `x-ghl-signature` header
     * @param string $publicKey The Ed25519 public key (PEM-encoded SPKI, or raw 32-byte / hex / base64)
     * @return bool True if signature is valid, false otherwise
     */
    public function verifyEd25519Signature(
        string $payload,
        string $signature,
        string $publicKey
    ): bool {
        try {
            $this->logger->debug('Verifying webhook Ed25519 signature');

            if (!function_exists('sodium_crypto_sign_verify_detached')) {
                $this->logger->error('libsodium is not available; cannot verify Ed25519 signatures');
                return false;
            }

            $rawSignature = base64_decode($signature, true);
            if ($rawSignature === false || strlen($rawSignature) !== SODIUM_CRYPTO_SIGN_BYTES) {
                $this->logger->warn('Ed25519 signature is not a valid base64-encoded 64-byte value');
                return false;
            }

            $rawPublicKey = $this->extractRawEd25519PublicKey($publicKey);
            if ($rawPublicKey === null) {
                $this->logger->warn('Ed25519 public key could not be parsed');
                return false;
            }

            return sodium_crypto_sign_verify_detached($rawSignature, $payload, $rawPublicKey);
        } catch (\Throwable $error) {
            $this->logger->error('Error verifying webhook Ed25519 signature: ' . $error->getMessage());
            return false;
        }
    }

    /**
     * Normalise an Ed25519 public key into the raw 32-byte form expected by libsodium.
     * Accepts PEM-encoded SPKI, raw 32 bytes, 64 hex chars, or base64.
     *
     * @param string $publicKey Public key in one of the supported formats
     * @return string|null Raw 32-byte key, or null if the input could not be parsed
     */
    private function extractRawEd25519PublicKey(string $publicKey): ?string
    {
        $key = trim($publicKey);

        if (strpos($key, '-----BEGIN') !== false) {
            $body = preg_replace('/-----[^-]+-----|\s+/', '', $key);
            $der = base64_decode((string) $body, true);
            if ($der === false || strlen($der) < SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES) {
                return null;
            }
            // Ed25519 SubjectPublicKeyInfo is a 12-byte prefix followed by the 32-byte key.
            return substr($der, -SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES);
        }

        if (strlen($key) === SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES) {
            return $key;
        }

        if (strlen($key) === SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES * 2 && ctype_xdigit($key)) {
            $bin = hex2bin($key);
            return $bin === false ? null : $bin;
        }

        $decoded = base64_decode($key, true);
        if ($decoded !== false && strlen($decoded) === SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES) {
            return $decoded;
        }

        return null;
    }

    /**
     * Read a value from the environment, checking $_ENV, $_SERVER, and getenv() in order.
     * Returns null when the variable is unset or empty.
     */
    private function readEnv(string $name): ?string
    {
        if (array_key_exists($name, $_ENV) && $_ENV[$name] !== '') {
            return (string) $_ENV[$name];
        }
        if (array_key_exists($name, $_SERVER) && $_SERVER[$name] !== '') {
            return (string) $_SERVER[$name];
        }
        $value = getenv($name);
        if ($value === false || $value === '') {
            return null;
        }
        return $value;
    }

    /**
     * Generate location access token and store it using company token
     * 
     * @param string $companyId The company ID
     * @param string $locationId The location ID
     * @return void
     */
    private function generateLocationAccessToken(
        string $companyId,
        string $locationId
    ): void {
        try {
            // Get the token for the company from the store
            $companyToken = $this->sessionStorage->getAccessToken($companyId);
            if (!$companyToken) {
                $this->logger->warn(
                    "Company token not found for companyId: {$companyId}, skipping location access token generation"
                );
                return;
            }

            $this->logger->debug(
                "Generating location access token for location: {$locationId}"
            );

            // Get location access token using OAuth service
            $locationTokenResponse = $this->oauthService->getLocationAccessToken([
                'companyId' => $companyId,
                'locationId' => $locationId
            ]);

            // Store the location token in session storage
            $this->sessionStorage->setSession($locationId, new SessionData($locationTokenResponse));

            $this->logger->debug(
                "Location access token generated and stored for location: {$locationId}"
            );
        } catch (\Exception $error) {
            $this->logger->error("Failed to generate location access token: {$error->getMessage()}");
        }
    }
}

