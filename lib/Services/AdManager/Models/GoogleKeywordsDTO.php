<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleKeywordsDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class GoogleKeywordsDTO
{
    /**
     * @var array&lt;GoogleKeywordItemDTO&gt;|null
     */
    public ?array $positives = null;

    /**
     * @var array&lt;GoogleKeywordItemDTO&gt;|null
     */
    public ?array $negatives = null;

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
        // Handle array of GoogleKeywordItemDTO objects
        if (isset($data['positives']) && is_array($data['positives'])) {
            $this->positives = array_map(function($item) {
                return is_array($item) ? new GoogleKeywordItemDTO($item) : $item;
            }, $data['positives']);
        } else {
            $this->positives = $data['positives'] ?? null;
        }
        // Handle array of GoogleKeywordItemDTO objects
        if (isset($data['negatives']) && is_array($data['negatives'])) {
            $this->negatives = array_map(function($item) {
                return is_array($item) ? new GoogleKeywordItemDTO($item) : $item;
            }, $data['negatives']);
        } else {
            $this->negatives = $data['negatives'] ?? null;
        }
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
