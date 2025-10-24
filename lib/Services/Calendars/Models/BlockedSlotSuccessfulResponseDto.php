<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * BlockedSlotSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class BlockedSlotSuccessfulResponseDto
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
    public string $title;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $start_time;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $end_time;

    /**
     * @var string|null
     */
    public ?string $calendar_id = null;

    /**
     * @var string|null
     */
    public ?string $assigned_user_id = null;

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
        $this->id = $data['id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->calendar_id = $data['calendarId'] ?? null;
        $this->assigned_user_id = $data['assignedUserId'] ?? null;
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
