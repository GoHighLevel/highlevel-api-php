<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarsGetSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarsGetSuccessfulResponseDTO
{
    /**
     * @var array&lt;CalendarDTO&gt;|null
     */
    public ?array $calendars = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CalendarDTO objects
        if (isset($data['calendars']) && is_array($data['calendars'])) {
            $this->calendars = array_map(function($item) {
                return is_array($item) ? new CalendarDTO($item) : $item;
            }, $data['calendars']);
        } else {
            $this->calendars = $data['calendars'] ?? null;
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
        if ($this->calendars !== null) {
            $result['calendars'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->calendars);
        }
        return $result;
    }
}
