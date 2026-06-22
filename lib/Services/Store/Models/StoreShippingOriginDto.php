<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->street1 !== null) {
            $result['street1'] = $this->street1;
        }
        if ($this->street2 !== null) {
            $result['street2'] = $this->street2;
        }
        if ($this->zip !== null) {
            $result['zip'] = $this->zip;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        return $result;
    }
}
