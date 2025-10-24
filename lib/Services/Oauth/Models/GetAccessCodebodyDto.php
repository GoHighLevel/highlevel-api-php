<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * GetAccessCodebodyDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetAccessCodebodyDto
{
    /**
     * @var string
     */
    public string $client_id;

    /**
     * @var string
     */
    public string $client_secret;

    /**
     * @var string
     */
    public string $grant_type;

    /**
     * @var string|null
     */
    public ?string $code = null;

    /**
     * @var string|null
     */
    public ?string $refresh_token = null;

    /**
     * @var string|null
     */
    public ?string $user_type = null;

    /**
     * @var string|null
     */
    public ?string $redirect_uri = null;

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
        $this->client_id = $data['client_id'] ?? '';
        $this->client_secret = $data['client_secret'] ?? '';
        $this->grant_type = $data['grant_type'] ?? '';
        $this->code = $data['code'] ?? null;
        $this->refresh_token = $data['refresh_token'] ?? null;
        $this->user_type = $data['user_type'] ?? null;
        $this->redirect_uri = $data['redirect_uri'] ?? null;
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
