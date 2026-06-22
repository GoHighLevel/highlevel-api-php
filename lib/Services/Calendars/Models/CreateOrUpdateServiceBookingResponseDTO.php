<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateOrUpdateServiceBookingResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateOrUpdateServiceBookingResponseDTO
{
    /**
     * @var string
     */
    public string $booking_id;

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
    public string $service_location_id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $start_time;

    /**
     * @var string
     */
    public string $end_time;

    /**
     * @var array&lt;ServiceDTO&gt;
     */
    public array $services;

    /**
     * @var string
     */
    public string $timezone;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string
     */
    public string $date_updated;

    /**
     * @var mixed
     */
    public $created_by;

    /**
     * @var string|null
     */
    public ?string $meeting_location = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $messages = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->booking_id = $data['bookingId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->service_location_id = $data['serviceLocationId'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->start_time = $data['startTime'] ?? '';
        $this->end_time = $data['endTime'] ?? '';
        // Handle array of ServiceDTO objects
        if (isset($data['services']) && is_array($data['services'])) {
            $this->services = array_map(function($item) {
                return is_array($item) ? new ServiceDTO($item) : $item;
            }, $data['services']);
        } else {
            $this->services = $data['services'] ?? [];
        }
        $this->timezone = $data['timezone'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->date_added = $data['dateAdded'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
        $this->created_by = $data['createdBy'] ?? null;
        $this->meeting_location = $data['meetingLocation'] ?? null;
        $this->messages = $data['messages'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->booking_id !== null) {
            $result['bookingId'] = $this->booking_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->service_location_id !== null) {
            $result['serviceLocationId'] = $this->service_location_id;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->services !== null) {
            $result['services'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->services);
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->meeting_location !== null) {
            $result['meetingLocation'] = $this->meeting_location;
        }
        if ($this->messages !== null) {
            $result['messages'] = $this->messages;
        }
        return $result;
    }
}
