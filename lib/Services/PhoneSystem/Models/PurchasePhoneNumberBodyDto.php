<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * PurchasePhoneNumberBodyDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class PurchasePhoneNumberBodyDto
{
    /**
     * @var string
     */
    public string $phone_number;

    /**
     * @var string|null
     */
    public ?string $country_code = null;

    /**
     * @var string|null
     */
    public ?string $number_type = null;

    /**
     * @var string|null
     */
    public ?string $address_sid = null;

    /**
     * @var string|null
     */
    public ?string $bundle_sid = null;

    /**
     * @var string|null
     */
    public ?string $locality = null;

    /**
     * @var string|null
     */
    public ?string $region = null;

    /**
     * @var string|null
     */
    public ?string $fingerprint_id = null;

    /**
     * @var bool|null
     */
    public ?bool $skip_location_k_y_c = null;

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
        $this->country_code = $data['countryCode'] ?? null;
        $this->number_type = $data['numberType'] ?? null;
        $this->address_sid = $data['addressSid'] ?? null;
        $this->bundle_sid = $data['bundleSid'] ?? null;
        $this->locality = $data['locality'] ?? null;
        $this->region = $data['region'] ?? null;
        $this->fingerprint_id = $data['fingerprintId'] ?? null;
        $this->skip_location_k_y_c = $data['skipLocationKYC'] ?? null;
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
