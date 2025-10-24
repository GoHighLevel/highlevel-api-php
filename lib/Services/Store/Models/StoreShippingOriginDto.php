<?php

namespace HighLevel\Services\Store\Models;

/**
 * StoreShippingOriginDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class StoreShippingOriginDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var float
     */
    public float $country;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string
     */
    public string $city;

    /**
     * @var string
     */
    public string $street1;

    /**
     * @var string|null
     */
    public ?string $street2 = null;

    /**
     * @var string
     */
    public string $zip;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

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
        $this->name = $data['name'] ?? '';
        $this->country = $data['country'] ?? 0;
        $this->state = $data['state'] ?? null;
        $this->city = $data['city'] ?? '';
        $this->street1 = $data['street1'] ?? '';
        $this->street2 = $data['street2'] ?? null;
        $this->zip = $data['zip'] ?? '';
        $this->phone = $data['phone'] ?? null;
        $this->email = $data['email'] ?? null;
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
