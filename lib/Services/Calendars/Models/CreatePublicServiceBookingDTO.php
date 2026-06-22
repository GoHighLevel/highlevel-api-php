<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreatePublicServiceBookingDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreatePublicServiceBookingDTO
{
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
     * @var string
     */
    public string $end_time;

    /**
     * @var string
     */
    public string $timezone;

    /**
     * @var array&lt;CreateBookingServiceDTO&gt;
     */
    public array $services;

    /**
     * @var string|null
     */
    public ?string $service_location_id = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->start_time = $data['startTime'] ?? '';
        $this->end_time = $data['endTime'] ?? '';
        $this->timezone = $data['timezone'] ?? '';
        // Handle array of CreateBookingServiceDTO objects
        if (isset($data['services']) && is_array($data['services'])) {
            $this->services = array_map(function($item) {
                return is_array($item) ? new CreateBookingServiceDTO($item) : $item;
            }, $data['services']);
        } else {
            $this->services = $data['services'] ?? [];
        }
        $this->service_location_id = $data['serviceLocationId'] ?? null;
        $this->meeting_location = $data['meetingLocation'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->status = $data['status'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
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
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->services !== null) {
            $result['services'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->services);
        }
        if ($this->service_location_id !== null) {
            $result['serviceLocationId'] = $this->service_location_id;
        }
        if ($this->meeting_location !== null) {
            $result['meetingLocation'] = $this->meeting_location;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
