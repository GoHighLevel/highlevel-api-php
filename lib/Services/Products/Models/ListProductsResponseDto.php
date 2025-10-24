<?php

namespace HighLevel\Services\Products\Models;

/**
 * ListProductsResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ListProductsResponseDto
{
    /**
     * @var array&lt;DefaultProductResponseDto&gt;
     */
    public array $products;

    /**
     * @var array&lt;ListProductsStats&gt;
     */
    public array $total;

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
        // Handle array of DefaultProductResponseDto objects
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = array_map(function($item) {
                return is_array($item) ? new DefaultProductResponseDto($item) : $item;
            }, $data['products']);
        } else {
            $this->products = $data['products'] ?? [];
        }
        // Handle array of ListProductsStats objects
        if (isset($data['total']) && is_array($data['total'])) {
            $this->total = array_map(function($item) {
                return is_array($item) ? new ListProductsStats($item) : $item;
            }, $data['total']);
        } else {
            $this->total = $data['total'] ?? [];
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
