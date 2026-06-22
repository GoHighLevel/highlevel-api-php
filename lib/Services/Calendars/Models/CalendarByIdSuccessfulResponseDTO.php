<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarByIdSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarByIdSuccessfulResponseDTO
{
    /**
     * @var CalendarDTO
     */
    public CalendarDTO $calendar;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single CalendarDTO object
        if (isset($data['calendar']) && is_array($data['calendar'])) {
            $this->calendar = new CalendarDTO($data['calendar']);
        } else {
            $this->calendar = $data['calendar'] ?? null;
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
        if ($this->calendar !== null) {
            $result['calendar'] = is_object($this->calendar) && method_exists($this->calendar, 'toArray') 
                ? $this->calendar->toArray() 
                : $this->calendar;
        }
        return $result;
    }
}
