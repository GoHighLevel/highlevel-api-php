<?php

namespace HighLevel\Services\Store\Models;

/**
 * ContactAddress model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ContactAddress
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var string|null
     */
    public ?string $address_line1 = null;

    /**
     * @var string
     */
    public string $country;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $zip = null;

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
        $this->name = $data['name'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
        $this->address_line1 = $data['addressLine1'] ?? null;
        $this->country = $data['country'] ?? '';
        $this->state = $data['state'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->zip = $data['zip'] ?? null;
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
        if ($this->company_name !== null) {
            $result['companyName'] = $this->company_name;
        }
        if ($this->address_line1 !== null) {
            $result['addressLine1'] = $this->address_line1;
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
