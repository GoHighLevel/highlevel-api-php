<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->logo_url !== null) {
            $result['logoUrl'] = $this->logo_url;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->phone_no !== null) {
            $result['phoneNo'] = $this->phone_no;
        }
        if ($this->address !== null) {
            $result['address'] = is_object($this->address) && method_exists($this->address, 'toArray') 
                ? $this->address->toArray() 
                : $this->address;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->custom_values !== null) {
            $result['customValues'] = $this->custom_values;
        }
        return $result;
    }
}
