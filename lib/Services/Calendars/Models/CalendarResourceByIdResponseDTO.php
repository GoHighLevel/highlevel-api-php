<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarResourceByIdResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarResourceByIdResponseDTO
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
     * @var array&lt;string&gt;
     */
    public array $calendar_ids;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        $this->calendar_ids = $data['calendarIds'] ?? [];
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
