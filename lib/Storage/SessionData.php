<?php

namespace HighLevel\Storage;

use HighLevel\Constants\UserType;

/**
 * Session data class for OAuth and authentication information
 * Used across all session storage implementations
 * 
 * @package HighLevel\Storage
 */
class SessionData
{
    /**
     * OAuth access token
     * @var string|null
     */
    public ?string $access_token = null;

    /**
     * OAuth refresh token
     * @var string|null
     */
    public ?string $refresh_token = null;

    /**
     * Token type (usually "Bearer")
     * @var string|null
     */
    public ?string $token_type = null;

    /**
     * OAuth scope
     * @var string|null
     */
    public ?string $scope = null;

    /**
     * User type (UserType::LOCATION or UserType::COMPANY)
     * @var string|null
     */
    public ?string $user_type = null;

    /**
     * Company ID
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * Location ID
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * User ID
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * Original expires_in from OAuth response (seconds)
     * @var int|null
     */
    public ?int $expires_in = null;

    /**
     * Calculated expiration timestamp (milliseconds since epoch)
     * @var int|null
     */
    public ?int $expire_at = null;

    /**
     * Create session data from array, object, or existing data
     * 
     * @param array<string, mixed>|object|SessionData $data Session data
     */
    public function __construct($data = [])
    {
        if ($data instanceof SessionData) {
            $this->access_token = $data->access_token;
            $this->refresh_token = $data->refresh_token;
            $this->token_type = $data->token_type;
            $this->scope = $data->scope;
            $this->user_type = $data->user_type;
            $this->company_id = $data->company_id;
            $this->location_id = $data->location_id;
            $this->user_id = $data->user_id;
            $this->expires_in = $data->expires_in;
            $this->expire_at = $data->expire_at;
        } elseif (is_object($data)) {
            // Accept both camelCase (v3 API token responses) and snake_case keys.
            $this->access_token = $data->accessToken ?? $data->access_token ?? null;
            $this->refresh_token = $data->refreshToken ?? $data->refresh_token ?? null;
            $this->token_type = $data->tokenType ?? $data->token_type ?? null;
            $this->scope = $data->scope ?? null;
            $this->user_type = $data->userType ?? $data->user_type ?? null;
            $this->company_id = $data->companyId ?? $data->company_id ?? null;
            $this->location_id = $data->locationId ?? $data->location_id ?? null;
            $this->user_id = $data->userId ?? $data->user_id ?? null;
            $this->expires_in = $data->expiresIn ?? $data->expires_in ?? null;
            $this->expire_at = $data->expireAt ?? $data->expire_at ?? null;
        } elseif (is_array($data)) {
            // Accept both camelCase (v3 API token responses) and snake_case keys.
            $this->access_token = $data['accessToken'] ?? $data['access_token'] ?? null;
            $this->refresh_token = $data['refreshToken'] ?? $data['refresh_token'] ?? null;
            $this->token_type = $data['tokenType'] ?? $data['token_type'] ?? null;
            $this->scope = $data['scope'] ?? null;
            $this->user_type = $data['userType'] ?? $data['user_type'] ?? null;
            $this->company_id = $data['companyId'] ?? $data['company_id'] ?? null;
            $this->location_id = $data['locationId'] ?? $data['location_id'] ?? null;
            $this->user_id = $data['userId'] ?? $data['user_id'] ?? null;
            $this->expires_in = $data['expiresIn'] ?? $data['expires_in'] ?? null;
            $this->expire_at = $data['expireAt'] ?? $data['expire_at'] ?? null;
        }
    }

    /**
     * Convert to array format (for backward compatibility)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return array_filter([
            'access_token' => $this->access_token,
            'refresh_token' => $this->refresh_token,
            'token_type' => $this->token_type,
            'scope' => $this->scope,
            'user_type' => $this->user_type,
            'company_id' => $this->company_id,
            'location_id' => $this->location_id,
            'user_id' => $this->user_id,
            'expires_in' => $this->expires_in,
            'expire_at' => $this->expire_at,
        ], fn($value) => $value !== null);
    }
}

