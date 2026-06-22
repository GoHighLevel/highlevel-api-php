<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * MigrateConnectionDto model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class MigrateConnectionDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $app_id;

    /**
     * @var string
     */
    public string $app_version_id;

    /**
     * @var string
     */
    public string $account_id;

    /**
     * @var string|null
     */
    public ?string $api_key = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $basic_credentials = null;

    /**
     * @var string|null
     */
    public ?string $access_token = null;

    /**
     * @var string|null
     */
    public ?string $refresh_token = null;

    /**
     * @var float|null
     */
    public ?float $expiry_in = null;

    /**
     * @var float|null
     */
    public ?float $expiry_at = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $scopes = null;

    /**
     * @var string|null
     */
    public ?string $display_name = null;

    /**
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->app_id = $data['appId'] ?? '';
        $this->app_version_id = $data['appVersionId'] ?? '';
        $this->account_id = $data['accountId'] ?? '';
        $this->api_key = $data['apiKey'] ?? null;
        $this->basic_credentials = $data['basicCredentials'] ?? null;
        $this->access_token = $data['accessToken'] ?? null;
        $this->refresh_token = $data['refreshToken'] ?? null;
        $this->expiry_in = $data['expiryIn'] ?? null;
        $this->expiry_at = $data['expiryAt'] ?? null;
        $this->scopes = $data['scopes'] ?? null;
        $this->display_name = $data['displayName'] ?? null;
        $this->is_default = $data['isDefault'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->app_id !== null) {
            $result['appId'] = $this->app_id;
        }
        if ($this->app_version_id !== null) {
            $result['appVersionId'] = $this->app_version_id;
        }
        if ($this->account_id !== null) {
            $result['accountId'] = $this->account_id;
        }
        if ($this->api_key !== null) {
            $result['apiKey'] = $this->api_key;
        }
        if ($this->basic_credentials !== null) {
            $result['basicCredentials'] = $this->basic_credentials;
        }
        if ($this->access_token !== null) {
            $result['accessToken'] = $this->access_token;
        }
        if ($this->refresh_token !== null) {
            $result['refreshToken'] = $this->refresh_token;
        }
        if ($this->expiry_in !== null) {
            $result['expiryIn'] = $this->expiry_in;
        }
        if ($this->expiry_at !== null) {
            $result['expiryAt'] = $this->expiry_at;
        }
        if ($this->scopes !== null) {
            $result['scopes'] = $this->scopes;
        }
        if ($this->display_name !== null) {
            $result['displayName'] = $this->display_name;
        }
        if ($this->is_default !== null) {
            $result['isDefault'] = $this->is_default;
        }
        return $result;
    }
}
