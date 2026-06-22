<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * AppointmentSchemaResponse model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class AppointmentSchemaResponse
{
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
     * @var string|null
     */
    public ?string $start_time = null;

    /**
     * @var string|null
     */
    public ?string $end_time = null;

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
    public ?string $appointment_status = null;

    /**
     * @var string|null
     */
    public ?string $assigned_user_id = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var bool|null
     */
    public ?bool $is_recurring = null;

    /**
     * @var string|null
     */
    public ?string $rrule = null;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string
     */
    public string $date_updated;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->meeting_location_type = $data['meetingLocationType'] ?? null;
        $this->appointment_status = $data['appointmentStatus'] ?? null;
        $this->assigned_user_id = $data['assignedUserId'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->is_recurring = $data['isRecurring'] ?? null;
        $this->rrule = $data['rrule'] ?? null;
        $this->date_added = $data['dateAdded'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
        $this->id = $data['id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->meeting_location_type !== null) {
            $result['meetingLocationType'] = $this->meeting_location_type;
        }
        if ($this->appointment_status !== null) {
            $result['appointmentStatus'] = $this->appointment_status;
        }
        if ($this->assigned_user_id !== null) {
            $result['assignedUserId'] = $this->assigned_user_id;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->is_recurring !== null) {
            $result['isRecurring'] = $this->is_recurring;
        }
        if ($this->rrule !== null) {
            $result['rrule'] = $this->rrule;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }
}
