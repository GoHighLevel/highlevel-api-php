<?php

namespace HighLevel\Services\Payments\Models;

/**
 * CreateCustomProvidersDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateCustomProvidersDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $payments_url;

    /**
     * @var string
     */
    public string $query_url;

    /**
     * @var string
     */
    public string $image_url;

    /**
     * @var bool
     */
    public bool $supports_subscription_schedule;

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
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->payments_url = $data['paymentsUrl'] ?? '';
        $this->query_url = $data['queryUrl'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
        $this->supports_subscription_schedule = $data['supportsSubscriptionSchedule'] ?? false;
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
