<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * AppointmentCreateSchema model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class AppointmentCreateSchema
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location_type = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location_id = null;

    /**
     * @var bool|null
     */
    public ?bool $override_location_config = null;

    /**
     * @var string|null
     */
    public ?string $appointment_status = null;

    /**
     * @var string|null
     */
    public ?string $assigned_user_id = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var bool|null
     */
    public ?bool $ignore_date_range = null;

    /**
     * @var bool|null
     */
    public ?bool $to_notify = null;

    /**
     * @var bool|null
     */
    public ?bool $ignore_free_slot_validation = null;

    /**
     * @var string|null
     */
    public ?string $rrule = null;

    /**
     * @var string
     */
    public string $calendar_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $start_time;

    /**
     * @var string|null
     */
    public ?string $end_time = null;

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
        $this->title = $data['title'] ?? null;
        $this->meeting_location_type = $data['meetingLocationType'] ?? null;
        $this->meeting_location_id = $data['meetingLocationId'] ?? null;
        $this->override_location_config = $data['overrideLocationConfig'] ?? null;
        $this->appointment_status = $data['appointmentStatus'] ?? null;
        $this->assigned_user_id = $data['assignedUserId'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->ignore_date_range = $data['ignoreDateRange'] ?? null;
        $this->to_notify = $data['toNotify'] ?? null;
        $this->ignore_free_slot_validation = $data['ignoreFreeSlotValidation'] ?? null;
        $this->rrule = $data['rrule'] ?? null;
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->start_time = $data['startTime'] ?? '';
        $this->end_time = $data['endTime'] ?? null;
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
