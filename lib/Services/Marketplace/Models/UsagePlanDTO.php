<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * UsagePlanDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class UsagePlanDTO
{
    /**
     * @var string
     */
    public string $product_type;

    /**
     * @var string
     */
    public string $product_name;

    /**
     * @var string
     */
    public string $usage_unit;

    /**
     * @var string
     */
    public string $meter_id;

    /**
     * @var string
     */
    public string $meter_name;

    /**
     * @var float
     */
    public float $fixed_price_per_unit;

    /**
     * @var string
     */
    public string $price_type;

    /**
     * @var string
     */
    public string $min_price_per_unit;

    /**
     * @var string
     */
    public string $max_price_per_unit;

    /**
     * @var float
     */
    public float $execution_limit_per_cycle;

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
        $this->product_type = $data['productType'] ?? '';
        $this->product_name = $data['productName'] ?? '';
        $this->usage_unit = $data['usageUnit'] ?? '';
        $this->meter_id = $data['meterId'] ?? '';
        $this->meter_name = $data['meterName'] ?? '';
        $this->fixed_price_per_unit = $data['fixedPricePerUnit'] ?? 0;
        $this->price_type = $data['priceType'] ?? '';
        $this->min_price_per_unit = $data['minPricePerUnit'] ?? '';
        $this->max_price_per_unit = $data['maxPricePerUnit'] ?? '';
        $this->execution_limit_per_cycle = $data['executionLimitPerCycle'] ?? 0;
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
