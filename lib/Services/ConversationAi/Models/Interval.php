<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * Interval model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class Interval
{
    /**
     * @var float
     */
    public float $start_hour;

    /**
     * @var float
     */
    public float $start_minute;

    /**
     * @var float
     */
    public float $end_hour;

    /**
     * @var float
     */
    public float $end_minute;

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
        $this->start_hour = $data['startHour'] ?? 0;
        $this->start_minute = $data['startMinute'] ?? 0;
        $this->end_hour = $data['endHour'] ?? 0;
        $this->end_minute = $data['endMinute'] ?? 0;
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
