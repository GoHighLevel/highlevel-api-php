<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * ScheduleIntervalDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ScheduleIntervalDTO
{
    /**
     * @var string
     */
    public string $from;

    /**
     * @var string
     */
    public string $to;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->from = $data['from'] ?? '';
        $this->to = $data['to'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->from !== null) {
            $result['from'] = $this->from;
        }
        if ($this->to !== null) {
            $result['to'] = $this->to;
        }
        return $result;
    }
}
