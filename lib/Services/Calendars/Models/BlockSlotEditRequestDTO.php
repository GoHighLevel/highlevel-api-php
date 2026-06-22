<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * BlockSlotEditRequestDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class BlockSlotEditRequestDTO
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string
     */
    public string $calendar_id;

    /**
     * @var string|null
     */
    public ?string $assigned_user_id = null;

    /**
     * @var string
     */
    public string $location_id;

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
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->assigned_user_id = $data['assignedUserId'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
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
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->assigned_user_id !== null) {
            $result['assignedUserId'] = $this->assigned_user_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
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
