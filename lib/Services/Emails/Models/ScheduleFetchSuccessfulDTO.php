<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleFetchSuccessfulDTO model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleFetchSuccessfulDTO
{
    /**
     * @var array&lt;ScheduleDto&gt;
     */
    public array $schedules;

    /**
     * @var array&lt;string&gt;
     */
    public array $total;

    /**
     * @var string
     */
    public string $trace_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ScheduleDto objects
        if (isset($data['schedules']) && is_array($data['schedules'])) {
            $this->schedules = array_map(function($item) {
                return is_array($item) ? new ScheduleDto($item) : $item;
            }, $data['schedules']);
        } else {
            $this->schedules = $data['schedules'] ?? [];
        }
        $this->total = $data['total'] ?? [];
        $this->trace_id = $data['traceId'] ?? '';
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
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
