<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * GetEventSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetEventSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $calendar_id = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $assigned_user_id = null;

    /**
     * @var string|null
     */
    public ?string $notes = null;

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
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $group_id = null;

    /**
     * @var string|null
     */
    public ?string $appointment_status = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $users = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $date_updated = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $assigned_resources = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->calendar_id = $data['calendarId'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->assigned_user_id = $data['assignedUserId'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        $this->group_id = $data['groupId'] ?? null;
        $this->appointment_status = $data['appointmentStatus'] ?? null;
        $this->users = $data['users'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->assigned_resources = $data['assignedResources'] ?? null;
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
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->assigned_user_id !== null) {
            $result['assignedUserId'] = $this->assigned_user_id;
        }
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
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
        if ($this->users !== null) {
            $result['users'] = $this->users;
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
        return $result;
    }
}
