<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * BusinessSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class BusinessSchema
{
    /**
     * @var string|null
     */
    public ?string $name = null;

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
     * @var string|null
     */
    public ?string $logo_url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->logo_url = $data['logoUrl'] ?? null;
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
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->postal_code !== null) {
            $result['postalCode'] = $this->postal_code;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->logo_url !== null) {
            $result['logoUrl'] = $this->logo_url;
        }
        return $result;
    }
}
