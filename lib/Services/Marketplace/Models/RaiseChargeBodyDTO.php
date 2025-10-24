<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * RaiseChargeBodyDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class RaiseChargeBodyDTO
{
    /**
     * @var string
     */
    public string $app_id;

    /**
     * @var string
     */
    public string $meter_id;

    /**
     * @var string
     */
    public string $event_id;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var float|null
     */
    public ?float $price = null;

    /**
     * @var string
     */
    public string $units;

    /**
     * @var string|null
     */
    public ?string $event_time = null;

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
        $this->app_id = $data['appId'] ?? '';
        $this->meter_id = $data['meterId'] ?? '';
        $this->event_id = $data['eventId'] ?? '';
        $this->user_id = $data['userId'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->company_id = $data['companyId'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->price = $data['price'] ?? null;
        $this->units = $data['units'] ?? '';
        $this->event_time = $data['eventTime'] ?? null;
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
