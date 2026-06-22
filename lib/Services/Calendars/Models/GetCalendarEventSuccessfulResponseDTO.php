<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GetCalendarEventSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GetCalendarEventSuccessfulResponseDTO
{
    /**
     * @var CalendarEventDTO|null
     */
    public ?CalendarEventDTO $event = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single CalendarEventDTO object
        if (isset($data['event']) && is_array($data['event'])) {
            $this->event = new CalendarEventDTO($data['event']);
        } else {
            $this->event = $data['event'] ?? null;
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
        if ($this->event !== null) {
            $result['event'] = is_object($this->event) && method_exists($this->event, 'toArray') 
                ? $this->event->toArray() 
                : $this->event;
        }
        return $result;
    }
}
