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
     * @param string $payload Webhook payload
     * @param string|null $signature Webhook signature from x-wh-signature header
     * @param string|null $publicKey Public key for signature verification
     * @param string|null $clientId Optional client ID for validation
     * @return array<string, mixed> Processing result with status and metadata
     */
    public function processWebhook(
        string $payload,
        ?string $signature = null,
        ?string $publicKey = null,
        ?string $clientId = null
    ): array {
        $this->logger->debug('Webhook received', $payload);

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

            // Verify webhook signature
            if ($signature && $publicKey) {
                $isSignatureValid = $this->verifySignature($payload, $signature, $publicKey);

                if (!$isSignatureValid) {
                    $this->logger->warn('Invalid webhook signature');
                    return [
                        'processed' => false,
                        'reason' => 'invalid_signature',
                        'signatureValid' => false
                    ];
                }
            } else {
                $this->logger->warn('Skipping signature verification - missing signature or public key');
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

