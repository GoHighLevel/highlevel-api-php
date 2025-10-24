<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * GrandTotalDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class GrandTotalDto
{
    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $discount_percentage;

    /**
     * @var array&lt;DiscountDto&gt;
     */
    public array $discounts;

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
        $this->amount = $data['amount'] ?? 0;
        $this->currency = $data['currency'] ?? '';
        $this->discount_percentage = $data['discountPercentage'] ?? 0;
        // Handle array of DiscountDto objects
        if (isset($data['discounts']) && is_array($data['discounts'])) {
            $this->discounts = array_map(function($item) {
                return is_array($item) ? new DiscountDto($item) : $item;
            }, $data['discounts']);
        } else {
            $this->discounts = $data['discounts'] ?? [];
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
