<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateScheduleDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateScheduleDTO
{
    /**
     * @var array&lt;ScheduleRuleDTO&gt;|null
     */
    public ?array $rules = null;

    /**
     * @var string
     */
    public string $timezone;

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
    public string $user_id;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $calendar_ids = null;

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
        // Handle array of ScheduleRuleDTO objects
        if (isset($data['rules']) && is_array($data['rules'])) {
            $this->rules = array_map(function($item) {
                return is_array($item) ? new ScheduleRuleDTO($item) : $item;
            }, $data['rules']);
        } else {
            $this->rules = $data['rules'] ?? null;
        }
        $this->timezone = $data['timezone'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->calendar_ids = $data['calendarIds'] ?? null;
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
