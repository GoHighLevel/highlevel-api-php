<?php

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
