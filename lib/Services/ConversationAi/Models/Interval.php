<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * Interval model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class Interval
{
    /**
     * @var float
     */
    public float $start_hour;

    /**
     * @var float
     */
    public float $start_minute;

    /**
     * @var float
     */
    public float $end_hour;

    /**
     * @var float
     */
    public float $end_minute;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->start_hour = $data['startHour'] ?? 0;
        $this->start_minute = $data['startMinute'] ?? 0;
        $this->end_hour = $data['endHour'] ?? 0;
        $this->end_minute = $data['endMinute'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->start_hour !== null) {
            $result['startHour'] = $this->start_hour;
        }
        if ($this->start_minute !== null) {
            $result['startMinute'] = $this->start_minute;
        }
        if ($this->end_hour !== null) {
            $result['endHour'] = $this->end_hour;
        }
        if ($this->end_minute !== null) {
            $result['endMinute'] = $this->end_minute;
        }
        return $result;
    }
}
