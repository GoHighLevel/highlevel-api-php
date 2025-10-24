<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ContactDetailsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ContactDetailsDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $phone_no;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var array&lt;AdditionalEmailsDto&gt;|null
     */
    public ?array $additional_emails = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var AddressDto|null
     */
    public ?AddressDto $address = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_fields = null;

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
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->phone_no = $data['phoneNo'] ?? '';
        $this->email = $data['email'] ?? '';
        // Handle array of AdditionalEmailsDto objects
        if (isset($data['additionalEmails']) && is_array($data['additionalEmails'])) {
            $this->additional_emails = array_map(function($item) {
                return is_array($item) ? new AdditionalEmailsDto($item) : $item;
            }, $data['additionalEmails']);
        } else {
            $this->additional_emails = $data['additionalEmails'] ?? null;
        }
        $this->company_name = $data['companyName'] ?? null;
        // Handle single AddressDto object
        if (isset($data['address']) && is_array($data['address'])) {
            $this->address = new AddressDto($data['address']);
        } else {
            $this->address = $data['address'] ?? null;
        }
        $this->custom_fields = $data['customFields'] ?? null;
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
