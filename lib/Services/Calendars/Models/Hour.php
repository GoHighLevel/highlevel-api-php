<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * Hour model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class Hour
{
    /**
     * @var float
     */
    public float $open_hour;

    /**
     * @var float
     */
    public float $open_minute;

    /**
     * @var float
     */
    public float $close_hour;

    /**
     * @var float
     */
    public float $close_minute;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->open_hour = $data['openHour'] ?? 0;
        $this->open_minute = $data['openMinute'] ?? 0;
        $this->close_hour = $data['closeHour'] ?? 0;
        $this->close_minute = $data['closeMinute'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->open_hour !== null) {
            $result['openHour'] = $this->open_hour;
        }
        if ($this->open_minute !== null) {
            $result['openMinute'] = $this->open_minute;
        }
        if ($this->close_hour !== null) {
            $result['closeHour'] = $this->close_hour;
        }
        if ($this->close_minute !== null) {
            $result['closeMinute'] = $this->close_minute;
        }
        return $result;
    }
}
