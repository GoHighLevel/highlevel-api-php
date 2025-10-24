<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleFetchSuccessfulDTO model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleFetchSuccessfulDTO
{
    /**
     * @var array&lt;ScheduleDto&gt;
     */
    public array $schedules;

    /**
     * @var array&lt;string&gt;
     */
    public array $total;

    /**
     * @var string
     */
    public string $trace_id;

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
        // Handle array of ScheduleDto objects
        if (isset($data['schedules']) && is_array($data['schedules'])) {
            $this->schedules = array_map(function($item) {
                return is_array($item) ? new ScheduleDto($item) : $item;
            }, $data['schedules']);
        } else {
            $this->schedules = $data['schedules'] ?? [];
        }
        $this->total = $data['total'] ?? [];
        $this->trace_id = $data['traceId'] ?? '';
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
