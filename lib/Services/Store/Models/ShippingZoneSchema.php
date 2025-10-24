<?php

namespace HighLevel\Services\Store\Models;

/**
 * ShippingZoneSchema model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ShippingZoneSchema
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
     * @var string
     */
    public string $name;

    /**
     * @var array&lt;ShippingZoneCountryDto&gt;
     */
    public array $countries;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;ShippingRateSchema&gt;|null
     */
    public ?array $shipping_rates = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

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
        $this->name = $data['name'] ?? '';
        // Handle array of ShippingZoneCountryDto objects
        if (isset($data['countries']) && is_array($data['countries'])) {
            $this->countries = array_map(function($item) {
                return is_array($item) ? new ShippingZoneCountryDto($item) : $item;
            }, $data['countries']);
        } else {
            $this->countries = $data['countries'] ?? [];
        }
        $this->id = $data['_id'] ?? '';
        // Handle array of ShippingRateSchema objects
        if (isset($data['shippingRates']) && is_array($data['shippingRates'])) {
            $this->shipping_rates = array_map(function($item) {
                return is_array($item) ? new ShippingRateSchema($item) : $item;
            }, $data['shippingRates']);
        } else {
            $this->shipping_rates = $data['shippingRates'] ?? null;
        }
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
