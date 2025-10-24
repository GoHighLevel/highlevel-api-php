<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * GoogleLocationSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class GoogleLocationSchema
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $store_code = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $metadata = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $storefront_address = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $relationship_data = null;

    /**
     * @var bool|null
     */
    public ?bool $max_location = null;

    /**
     * @var bool|null
     */
    public ?bool $is_verified = null;

    /**
     * @var bool|null
     */
    public ?bool $is_connected = null;

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
        $this->name = $data['name'] ?? null;
        $this->store_code = $data['storeCode'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->storefront_address = $data['storefrontAddress'] ?? null;
        $this->relationship_data = $data['relationshipData'] ?? null;
        $this->max_location = $data['maxLocation'] ?? null;
        $this->is_verified = $data['isVerified'] ?? null;
        $this->is_connected = $data['isConnected'] ?? null;
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
