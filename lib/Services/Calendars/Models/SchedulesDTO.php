<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * SchedulesDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class SchedulesDTO
{
    /**
     * @var float|null
     */
    public ?float $time_offset = null;

    /**
     * @var string|null
     */
    public ?string $unit = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->time_offset = $data['timeOffset'] ?? null;
        $this->unit = $data['unit'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->time_offset !== null) {
            $result['timeOffset'] = $this->time_offset;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }
}
