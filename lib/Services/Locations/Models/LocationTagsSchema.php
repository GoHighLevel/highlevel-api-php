<?php

namespace HighLevel\Services\Locations\Models;

/**
 * LocationTagsSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class LocationTagsSchema
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->id = $data['id'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }
}
