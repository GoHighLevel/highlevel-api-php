<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarEventDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarEventDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string
     */
    public string $title;

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
    public string $group_id;

    /**
     * @var string
     */
    public string $appointment_status;

    /**
     * @var string
     */
    public string $assigned_user_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $users;

    /**
     * @var string|null
     */
    public ?string $notes = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var bool|null
     */
    public ?bool $is_recurring = null;

    /**
     * @var string|null
     */
    public ?string $rrule = null;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $start_time;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $end_time;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $date_added;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $date_updated;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $assigned_resources = null;

    /**
     * @var mixed
     */
    public mixed $created_by;

    /**
     * @var string|null
     */
    public ?string $master_event_id = null;

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
        $this->address = $data['address'] ?? null;
        $this->title = $data['title'] ?? '';
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->group_id = $data['groupId'] ?? '';
        $this->appointment_status = $data['appointmentStatus'] ?? '';
        $this->assigned_user_id = $data['assignedUserId'] ?? '';
        $this->users = $data['users'] ?? [];
        $this->notes = $data['notes'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->is_recurring = $data['isRecurring'] ?? null;
        $this->rrule = $data['rrule'] ?? null;
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->assigned_resources = $data['assignedResources'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->master_event_id = $data['masterEventId'] ?? null;
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
