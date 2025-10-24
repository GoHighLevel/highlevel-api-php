<?php

namespace HighLevel\Services\Products\Models;

/**
 * UpdateProductReviewsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class UpdateProductReviewsDto
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var array&lt;UpdateProductReviewObjectDto&gt;
     */
    public array $reviews;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $status;

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
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        // Handle array of UpdateProductReviewObjectDto objects
        if (isset($data['reviews']) && is_array($data['reviews'])) {
            $this->reviews = array_map(function($item) {
                return is_array($item) ? new UpdateProductReviewObjectDto($item) : $item;
            }, $data['reviews']);
        } else {
            $this->reviews = $data['reviews'] ?? [];
        }
        $this->status = $data['status'] ?? null;
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
