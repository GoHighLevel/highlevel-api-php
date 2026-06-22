<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GetAllSchedulesResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GetAllSchedulesResponseDTO
{
    /**
     * @var array&lt;ScheduleObjectResponseDTO&gt;
     */
    public array $schedules;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ScheduleObjectResponseDTO objects
        if (isset($data['schedules']) && is_array($data['schedules'])) {
            $this->schedules = array_map(function($item) {
                return is_array($item) ? new ScheduleObjectResponseDTO($item) : $item;
            }, $data['schedules']);
        } else {
            $this->schedules = $data['schedules'] ?? [];
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
        if ($this->schedules !== null) {
            $result['schedules'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->schedules);
        }
        return $result;
    }
}
