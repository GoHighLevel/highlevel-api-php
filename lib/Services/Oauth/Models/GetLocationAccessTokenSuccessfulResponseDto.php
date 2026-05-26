<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * GetLocationAccessTokenSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetLocationAccessTokenSuccessfulResponseDto
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
        $this->access_token = $data['access_token'] ?? null;
        $this->token_type = $data['token_type'] ?? null;
        $this->expires_in = $data['expires_in'] ?? null;
        $this->scope = $data['scope'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->plan_id = $data['planId'] ?? null;
        $this->user_id = $data['userId'] ?? '';
        $this->app_id = $data['appId'] ?? null;
        $this->version_id = $data['versionId'] ?? null;
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
