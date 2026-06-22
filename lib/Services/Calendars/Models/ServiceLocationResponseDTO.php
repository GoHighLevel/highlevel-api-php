<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ServiceLocationResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServiceLocationResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * @var string|null
     */
    public ?string $cover_image = null;

    /**
     * @var string|null
     */
    public ?string $location_type = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->slug = $data['slug'] ?? '';
        $this->is_active = $data['isActive'] ?? null;
        $this->is_private = $data['isPrivate'] ?? null;
        $this->cover_image = $data['coverImage'] ?? null;
        $this->location_type = $data['locationType'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->phone = $data['phone'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        if ($this->is_private !== null) {
            $result['isPrivate'] = $this->is_private;
        }
        if ($this->cover_image !== null) {
            $result['coverImage'] = $this->cover_image;
        }
        if ($this->location_type !== null) {
            $result['locationType'] = $this->location_type;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        return $result;
    }
}
