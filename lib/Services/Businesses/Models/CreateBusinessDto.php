<?php

namespace HighLevel\Services\Businesses\Models;

/**
 * CreateBusinessDto model
 * 
 * @package HighLevel\Services\Businesses\Models
 */
class CreateBusinessDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

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
    public ?string $postal_code = null;

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
    public ?string $description = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->phone = $data['phone'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->description = $data['description'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->postal_code !== null) {
            $result['postalCode'] = $this->postal_code;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        return $result;
    }
}
