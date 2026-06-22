<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CreatedTimeSlotDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CreatedTimeSlotDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var float|null
     */
    public ?float $day_of_week = null;

    /**
     * @var string|null
     */
    public ?string $time = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? null;
        $this->day_of_week = $data['dayOfWeek'] ?? null;
        $this->time = $data['time'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->day_of_week !== null) {
            $result['dayOfWeek'] = $this->day_of_week;
        }
        if ($this->time !== null) {
            $result['time'] = $this->time;
        }
        return $result;
    }
}
