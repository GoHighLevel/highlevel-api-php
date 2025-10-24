<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * Availability model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class Availability
{
    /**
     * @var string
     */
    public string $date;

    /**
     * @var array&lt;Hour&gt;
     */
    public array $hours;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

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
        $this->date = $data['date'] ?? '';
        // Handle array of Hour objects
        if (isset($data['hours']) && is_array($data['hours'])) {
            $this->hours = array_map(function($item) {
                return is_array($item) ? new Hour($item) : $item;
            }, $data['hours']);
        } else {
            $this->hours = $data['hours'] ?? [];
        }
        $this->deleted = $data['deleted'] ?? null;
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
