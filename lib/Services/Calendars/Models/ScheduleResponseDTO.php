<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ScheduleResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ScheduleResponseDTO
{
    /**
     * @var mixed
     */
    public $schedule;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->schedule = $data['schedule'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->schedule !== null) {
            $result['schedule'] = $this->schedule;
        }
        return $result;
    }
}
