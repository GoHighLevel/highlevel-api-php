<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * SubscriptionActionDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class SubscriptionActionDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $subtype_name = null;

    /**
     * @var string|null
     */
    public ?string $subtype_id = null;

    /**
     * @var string
     */
    public string $subtype_status;

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
        $this->subtype_name = $data['subtype_name'] ?? null;
        $this->subtype_id = $data['subtype_id'] ?? null;
        $this->subtype_status = $data['subtype_status'] ?? '';
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
