<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * UpdateServiceLocationDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class UpdateServiceLocationDTO
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $slug = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $cover_image = null;

    /**
     * @var string|null
     */
    public ?string $location_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->cover_image = $data['coverImage'] ?? null;
        $this->location_type = $data['locationType'] ?? null;
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
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->cover_image !== null) {
            $result['coverImage'] = $this->cover_image;
        }
        if ($this->location_type !== null) {
            $result['locationType'] = $this->location_type;
        }
        return $result;
    }
}
