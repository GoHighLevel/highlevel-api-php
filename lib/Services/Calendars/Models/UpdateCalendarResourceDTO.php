<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * UpdateCalendarResourceDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class UpdateCalendarResourceDTO
{
    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

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
     * @var array&lt;string&gt;|null
     */
    public ?array $calendar_ids = null;

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
        $this->location_id = $data['locationId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->quantity = $data['quantity'] ?? null;
        $this->out_of_service = $data['outOfService'] ?? null;
        $this->capacity = $data['capacity'] ?? null;
        $this->calendar_ids = $data['calendarIds'] ?? null;
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
        if ($this->quantity !== null) {
            $result['quantity'] = $this->quantity;
        }
        if ($this->out_of_service !== null) {
            $result['outOfService'] = $this->out_of_service;
        }
        if ($this->capacity !== null) {
            $result['capacity'] = $this->capacity;
        }
        if ($this->calendar_ids !== null) {
            $result['calendarIds'] = $this->calendar_ids;
        }
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        return $result;
    }
}
