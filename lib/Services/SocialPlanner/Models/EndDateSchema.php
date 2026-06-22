<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * EndDateSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class EndDateSchema
{
    /**
     * @var mixed
     */
    public $end_date;

    /**
     * @var mixed
     */
    public $end_time;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->end_date = $data['endDate'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        return $result;
    }
}
