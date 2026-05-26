<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * InvoiceSettingsBusinessDetailsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class InvoiceSettingsBusinessDetailsDto
{
    /**
     * @var string|null
     */
    public ?string $logo_url = null;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $phone_no = null;

    /**
     * @var Address|null
     */
    public ?Address $address = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_values = null;

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
        $this->logo_url = $data['logoUrl'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->phone_no = $data['phoneNo'] ?? null;
        // Handle single Address object
        if (isset($data['address']) && is_array($data['address'])) {
            $this->address = new Address($data['address']);
        } else {
            $this->address = $data['address'] ?? null;
        }
        $this->website = $data['website'] ?? null;
        $this->custom_values = $data['customValues'] ?? null;
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
