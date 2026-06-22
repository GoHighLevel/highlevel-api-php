<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AdScheduleTargetDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AdScheduleTargetDTO
{
    /**
     * @var string
     */
    public string $start_minute;

    /**
     * @var string
     */
    public string $end_minute;

    /**
     * @var string
     */
    public string $day_of_week;

    /**
     * @var float
     */
    public float $start_hour;

    /**
     * @var float
     */
    public float $end_hour;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->start_minute = $data['startMinute'] ?? '';
        $this->end_minute = $data['endMinute'] ?? '';
        $this->day_of_week = $data['dayOfWeek'] ?? '';
        $this->start_hour = $data['startHour'] ?? 0;
        $this->end_hour = $data['endHour'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->start_minute !== null) {
            $result['startMinute'] = $this->start_minute;
        }
        if ($this->end_minute !== null) {
            $result['endMinute'] = $this->end_minute;
        }
        if ($this->day_of_week !== null) {
            $result['dayOfWeek'] = $this->day_of_week;
        }
        if ($this->start_hour !== null) {
            $result['startHour'] = $this->start_hour;
        }
        if ($this->end_hour !== null) {
            $result['endHour'] = $this->end_hour;
        }
        return $result;
    }
}
