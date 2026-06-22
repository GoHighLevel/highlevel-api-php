<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * TimeSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class TimeSchema
{
    /**
     * @var float
     */
    public float $hours;

    /**
     * @var float
     */
    public float $minutes;

    /**
     * @var float
     */
    public float $seconds;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->hours = $data['hours'] ?? 0;
        $this->minutes = $data['minutes'] ?? 0;
        $this->seconds = $data['seconds'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->hours !== null) {
            $result['hours'] = $this->hours;
        }
        if ($this->minutes !== null) {
            $result['minutes'] = $this->minutes;
        }
        if ($this->seconds !== null) {
            $result['seconds'] = $this->seconds;
        }
        return $result;
    }
}
