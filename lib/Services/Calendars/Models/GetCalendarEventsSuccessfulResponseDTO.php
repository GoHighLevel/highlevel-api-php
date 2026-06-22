<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GetCalendarEventsSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GetCalendarEventsSuccessfulResponseDTO
{
    /**
     * @var array&lt;CalendarEventDTO&gt;|null
     */
    public ?array $events = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CalendarEventDTO objects
        if (isset($data['events']) && is_array($data['events'])) {
            $this->events = array_map(function($item) {
                return is_array($item) ? new CalendarEventDTO($item) : $item;
            }, $data['events']);
        } else {
            $this->events = $data['events'] ?? null;
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
        if ($this->events !== null) {
            $result['events'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->events);
        }
        return $result;
    }
}
