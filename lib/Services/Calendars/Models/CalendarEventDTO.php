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
     * @var bool|null
     */
    public ?bool $deleted = null;

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
    public $created_by;

    /**
     * @var string|null
     */
    public ?string $master_event_id = null;

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
        $this->deleted = $data['deleted'] ?? null;
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->assigned_resources = $data['assignedResources'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->master_event_id = $data['masterEventId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->group_id !== null) {
            $result['groupId'] = $this->group_id;
        }
        if ($this->appointment_status !== null) {
            $result['appointmentStatus'] = $this->appointment_status;
        }
        if ($this->assigned_user_id !== null) {
            $result['assignedUserId'] = $this->assigned_user_id;
        }
        if ($this->users !== null) {
            $result['users'] = $this->users;
        }
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->is_recurring !== null) {
            $result['isRecurring'] = $this->is_recurring;
        }
        if ($this->rrule !== null) {
            $result['rrule'] = $this->rrule;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->assigned_resources !== null) {
            $result['assignedResources'] = $this->assigned_resources;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->master_event_id !== null) {
            $result['masterEventId'] = $this->master_event_id;
        }
        return $result;
    }
}
