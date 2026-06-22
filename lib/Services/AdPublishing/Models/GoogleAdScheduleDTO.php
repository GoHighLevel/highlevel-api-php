<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleAdScheduleDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleAdScheduleDTO
{
    /**
     * @var string
     */
    public string $day_of_week;

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
        $this->day_of_week = $data['dayOfWeek'] ?? '';
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
        if ($this->day_of_week !== null) {
            $result['dayOfWeek'] = $this->day_of_week;
        }
        if ($this->from !== null) {
            $result['from'] = $this->from;
        }
        if ($this->to !== null) {
            $result['to'] = $this->to;
        }
        return $result;
    }
}
