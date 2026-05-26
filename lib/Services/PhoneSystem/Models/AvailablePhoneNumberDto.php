<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * AvailablePhoneNumberDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class AvailablePhoneNumberDto
{
    /**
     * @var string
     */
    public string $phone_number;

    /**
     * @var string
     */
    public string $friendly_name;

    /**
     * @var string
     */
    public string $iso_country;

    /**
     * @var string|null
     */
    public ?string $lata = null;

    /**
     * @var string|null
     */
    public ?string $locality = null;

    /**
     * @var string|null
     */
    public ?string $rate_center = null;

    /**
     * @var string|null
     */
    public ?string $latitude = null;

    /**
     * @var string|null
     */
    public ?string $longitude = null;

    /**
     * @var string|null
     */
    public ?string $region = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * @var string
     */
    public string $address_requirements;

    /**
     * @var bool
     */
    public bool $beta;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $capabilities;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $price = null;

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
        $this->phone_number = $data['phoneNumber'] ?? '';
        $this->friendly_name = $data['friendlyName'] ?? '';
        $this->iso_country = $data['isoCountry'] ?? '';
        $this->lata = $data['lata'] ?? null;
        $this->locality = $data['locality'] ?? null;
        $this->rate_center = $data['rateCenter'] ?? null;
        $this->latitude = $data['latitude'] ?? null;
        $this->longitude = $data['longitude'] ?? null;
        $this->region = $data['region'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->address_requirements = $data['addressRequirements'] ?? '';
        $this->beta = $data['beta'] ?? false;
        $this->capabilities = $data['capabilities'] ?? null;
        $this->price = $data['price'] ?? null;
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
