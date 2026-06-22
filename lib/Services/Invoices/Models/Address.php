<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * Address model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class Address
{
    /**
     * @var string|null
     */
    public ?string $address_line1 = null;

    /**
     * @var string|null
     */
    public ?string $address_line2 = null;

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
    public ?string $country_code = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->address_line1 = $data['addressLine1'] ?? null;
        $this->address_line2 = $data['addressLine2'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country_code = $data['countryCode'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->address_line1 !== null) {
            $result['addressLine1'] = $this->address_line1;
        }
        if ($this->address_line2 !== null) {
            $result['addressLine2'] = $this->address_line2;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->country_code !== null) {
            $result['countryCode'] = $this->country_code;
        }
        if ($this->postal_code !== null) {
            $result['postalCode'] = $this->postal_code;
        }
        return $result;
    }
}
