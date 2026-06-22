<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * AppointmentEditSchema model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class AppointmentEditSchema
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
     * @var string|null
     */
    public ?string $calendar_id = null;

    /**
     * @var string|null
     */
    public ?string $start_time = null;

    /**
     * @var string|null
     */
    public ?string $end_time = null;

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
        $this->calendar_id = $data['calendarId'] ?? null;
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->meeting_location_type !== null) {
            $result['meetingLocationType'] = $this->meeting_location_type;
        }
        if ($this->meeting_location_id !== null) {
            $result['meetingLocationId'] = $this->meeting_location_id;
        }
        if ($this->override_location_config !== null) {
            $result['overrideLocationConfig'] = $this->override_location_config;
        }
        if ($this->appointment_status !== null) {
            $result['appointmentStatus'] = $this->appointment_status;
        }
        if ($this->assigned_user_id !== null) {
            $result['assignedUserId'] = $this->assigned_user_id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->ignore_date_range !== null) {
            $result['ignoreDateRange'] = $this->ignore_date_range;
        }
        if ($this->to_notify !== null) {
            $result['toNotify'] = $this->to_notify;
        }
        if ($this->ignore_free_slot_validation !== null) {
            $result['ignoreFreeSlotValidation'] = $this->ignore_free_slot_validation;
        }
        if ($this->rrule !== null) {
            $result['rrule'] = $this->rrule;
        }
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        return $result;
    }
}
