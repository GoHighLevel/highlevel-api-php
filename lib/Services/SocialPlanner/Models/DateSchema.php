<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DateSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DateSchema
{
    /**
     * @var float
     */
    public float $year;

    /**
     * @var float
     */
    public float $month;

    /**
     * @var float
     */
    public float $day;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->year = $data['year'] ?? 0;
        $this->month = $data['month'] ?? 0;
        $this->day = $data['day'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        if ($this->month !== null) {
            $result['month'] = $this->month;
        }
        if ($this->day !== null) {
            $result['day'] = $this->day;
        }
        return $result;
    }
}
