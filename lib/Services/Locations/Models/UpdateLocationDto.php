<?php

namespace HighLevel\Services\Locations\Models;

/**
 * UpdateLocationDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class UpdateLocationDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * @var mixed
     */
    public mixed $prospect_info;

    /**
     * @var mixed
     */
    public mixed $settings;

    /**
     * @var mixed
     */
    public mixed $social;

    /**
     * @var mixed
     */
    public mixed $twilio;

    /**
     * @var mixed
     */
    public mixed $mailgun;

    /**
     * @var mixed
     */
    public mixed $snapshot;

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
        $this->name = $data['name'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->company_id = $data['companyId'] ?? '';
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->prospect_info = $data['prospectInfo'] ?? null;
        $this->settings = $data['settings'] ?? null;
        $this->social = $data['social'] ?? null;
        $this->twilio = $data['twilio'] ?? null;
        $this->mailgun = $data['mailgun'] ?? null;
        $this->snapshot = $data['snapshot'] ?? null;
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
