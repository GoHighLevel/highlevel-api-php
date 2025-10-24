<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * AppointmentBookingActionParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class AppointmentBookingActionParameters
{
    /**
     * @var string
     */
    public string $calendar_id;

    /**
     * @var float
     */
    public float $days_of_offering_dates;

    /**
     * @var float
     */
    public float $slots_per_day;

    /**
     * @var float
     */
    public float $hours_between_slots;

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
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->days_of_offering_dates = $data['daysOfOfferingDates'] ?? 0;
        $this->slots_per_day = $data['slotsPerDay'] ?? 0;
        $this->hours_between_slots = $data['hoursBetweenSlots'] ?? 0;
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
