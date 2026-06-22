<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * StartDateSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class StartDateSchema
{
    /**
     * @var mixed
     */
    public $start_date;

    /**
     * @var mixed
     */
    public $start_time;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->start_date = $data['startDate'] ?? null;
        $this->start_time = $data['startTime'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        return $result;
    }
}
