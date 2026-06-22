<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarResourceResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarResourceResponseDTO
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
    public string $resource_type;

    /**
     * @var bool
     */
    public bool $is_active;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var float|null
     */
    public ?float $quantity = null;

    /**
     * @var float|null
     */
    public ?float $out_of_service = null;

    /**
     * @var float|null
     */
    public ?float $capacity = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->resource_type = $data['resourceType'] ?? '';
        $this->is_active = $data['isActive'] ?? false;
        $this->description = $data['description'] ?? null;
        $this->quantity = $data['quantity'] ?? null;
        $this->out_of_service = $data['outOfService'] ?? null;
        $this->capacity = $data['capacity'] ?? null;
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
        if ($this->resource_type !== null) {
            $result['resourceType'] = $this->resource_type;
        }
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->quantity !== null) {
            $result['quantity'] = $this->quantity;
        }
        if ($this->out_of_service !== null) {
            $result['outOfService'] = $this->out_of_service;
        }
        if ($this->capacity !== null) {
            $result['capacity'] = $this->capacity;
        }
        return $result;
    }
}
