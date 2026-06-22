<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateCalendarResourceDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateCalendarResourceDTO
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
     * @var float
     */
    public float $quantity;

    /**
     * @var float
     */
    public float $out_of_service;

    /**
     * @var float
     */
    public float $capacity;

    /**
     * @var array&lt;string&gt;
     */
    public array $calendar_ids;

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
        $this->quantity = $data['quantity'] ?? 0;
        $this->out_of_service = $data['outOfService'] ?? 0;
        $this->capacity = $data['capacity'] ?? 0;
        $this->calendar_ids = $data['calendarIds'] ?? [];
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
        return $result;
    }
}
