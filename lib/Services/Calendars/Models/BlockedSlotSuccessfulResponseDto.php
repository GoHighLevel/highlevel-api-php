<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * BlockedSlotSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class BlockedSlotSuccessfulResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $start_time;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $end_time;

    /**
     * @var string|null
     */
    public ?string $calendar_id = null;

    /**
     * @var string|null
     */
    public ?string $assigned_user_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->calendar_id = $data['calendarId'] ?? null;
        $this->assigned_user_id = $data['assignedUserId'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
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
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->assigned_user_id !== null) {
            $result['assignedUserId'] = $this->assigned_user_id;
        }
        return $result;
    }
}
