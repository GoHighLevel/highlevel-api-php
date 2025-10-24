<?php

namespace HighLevel\Services\Payments\Models;

/**
 * CreateFulfillmentDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateFulfillmentDto
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
     * @var array&lt;FulfillmentTracking&gt;
     */
    public array $trackings;

    /**
     * @var array&lt;FulfillmentItems&gt;
     */
    public array $items;

    /**
     * @var bool
     */
    public bool $notify_customer;

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
        // Handle array of FulfillmentTracking objects
        if (isset($data['trackings']) && is_array($data['trackings'])) {
            $this->trackings = array_map(function($item) {
                return is_array($item) ? new FulfillmentTracking($item) : $item;
            }, $data['trackings']);
        } else {
            $this->trackings = $data['trackings'] ?? [];
        }
        // Handle array of FulfillmentItems objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new FulfillmentItems($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
        }
        $this->notify_customer = $data['notifyCustomer'] ?? false;
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
