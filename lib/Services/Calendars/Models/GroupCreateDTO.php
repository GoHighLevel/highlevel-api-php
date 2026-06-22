<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GroupCreateDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GroupCreateDTO
{
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
    public string $description;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->slug = $data['slug'] ?? '';
        $this->is_active = $data['isActive'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        return $result;
    }
}
