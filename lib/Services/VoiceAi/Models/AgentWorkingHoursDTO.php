<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * AgentWorkingHoursDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class AgentWorkingHoursDTO
{
    /**
     * @var float
     */
    public float $day_of_the_week;

    /**
     * @var array&lt;IntervalDTO&gt;
     */
    public array $intervals;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->day_of_the_week = $data['dayOfTheWeek'] ?? 0;
        // Handle array of IntervalDTO objects
        if (isset($data['intervals']) && is_array($data['intervals'])) {
            $this->intervals = array_map(function($item) {
                return is_array($item) ? new IntervalDTO($item) : $item;
            }, $data['intervals']);
        } else {
            $this->intervals = $data['intervals'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->day_of_the_week !== null) {
            $result['dayOfTheWeek'] = $this->day_of_the_week;
        }
        if ($this->intervals !== null) {
            $result['intervals'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->intervals);
        }
        return $result;
    }
}
