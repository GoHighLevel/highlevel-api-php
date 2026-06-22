<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * TimeSlotDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class TimeSlotDTO
{
    /**
     * @var float
     */
    public float $day_of_week;

    /**
     * @var string
     */
    public string $time;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->day_of_week = $data['dayOfWeek'] ?? 0;
        $this->time = $data['time'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->day_of_week !== null) {
            $result['dayOfWeek'] = $this->day_of_week;
        }
        if ($this->time !== null) {
            $result['time'] = $this->time;
        }
        return $result;
    }
}
