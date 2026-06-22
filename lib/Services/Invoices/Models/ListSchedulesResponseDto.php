<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ListSchedulesResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ListSchedulesResponseDto
{
    /**
     * @var array&lt;GetScheduleResponseDto&gt;
     */
    public array $schedules;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetScheduleResponseDto objects
        if (isset($data['schedules']) && is_array($data['schedules'])) {
            $this->schedules = array_map(function($item) {
                return is_array($item) ? new GetScheduleResponseDto($item) : $item;
            }, $data['schedules']);
        } else {
            $this->schedules = $data['schedules'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
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
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
