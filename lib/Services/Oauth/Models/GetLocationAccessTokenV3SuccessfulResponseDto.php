<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Oauth\Models;

/**
 * GetLocationAccessTokenV3SuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetLocationAccessTokenV3SuccessfulResponseDto
{
    /**
     * @var string|null
     */
    public ?string $access_token = null;

    /**
     * @var string|null
     */
    public ?string $token_type = null;

    /**
     * @var float|null
     */
    public ?float $expires_in = null;

    /**
     * @var string|null
     */
    public ?string $scope = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $plan_id = null;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var string|null
     */
    public ?string $app_id = null;

    /**
     * @var string|null
     */
    public ?string $version_id = null;

    /**
     * @var string|null
     */
    public ?string $refresh_token = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->access_token = $data['accessToken'] ?? null;
        $this->token_type = $data['tokenType'] ?? null;
        $this->expires_in = $data['expiresIn'] ?? null;
        $this->scope = $data['scope'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->plan_id = $data['planId'] ?? null;
        $this->user_id = $data['userId'] ?? '';
        $this->app_id = $data['appId'] ?? null;
        $this->version_id = $data['versionId'] ?? null;
        $this->refresh_token = $data['refreshToken'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->access_token !== null) {
            $result['accessToken'] = $this->access_token;
        }
        if ($this->token_type !== null) {
            $result['tokenType'] = $this->token_type;
        }
        if ($this->expires_in !== null) {
            $result['expiresIn'] = $this->expires_in;
        }
        if ($this->scope !== null) {
            $result['scope'] = $this->scope;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->plan_id !== null) {
            $result['planId'] = $this->plan_id;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->app_id !== null) {
            $result['appId'] = $this->app_id;
        }
        if ($this->version_id !== null) {
            $result['versionId'] = $this->version_id;
        }
        if ($this->refresh_token !== null) {
            $result['refreshToken'] = $this->refresh_token;
        }
        return $result;
    }
}
