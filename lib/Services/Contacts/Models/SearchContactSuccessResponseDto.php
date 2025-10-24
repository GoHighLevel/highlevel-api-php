<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * SearchContactSuccessResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class SearchContactSuccessResponseDto
{
    /**
     * @var array&lt;Contact&gt;
     */
    public array $contacts;

    /**
     * @var float
     */
    public float $total;

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
        // Handle array of Contact objects
        if (isset($data['contacts']) && is_array($data['contacts'])) {
            $this->contacts = array_map(function($item) {
                return is_array($item) ? new Contact($item) : $item;
            }, $data['contacts']);
        } else {
            $this->contacts = $data['contacts'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
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
