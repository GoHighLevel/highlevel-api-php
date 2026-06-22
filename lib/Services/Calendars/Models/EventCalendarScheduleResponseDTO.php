<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * EventCalendarScheduleResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class EventCalendarScheduleResponseDTO
{
    /**
     * @var string
     */
    public string $timezone;

    /**
     * @var array&lt;ScheduleRuleDTO&gt;
     */
    public array $rules;

    /**
     * @var string
     */
    public string $calendar_id;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $date_updated = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->timezone = $data['timezone'] ?? '';
        // Handle array of ScheduleRuleDTO objects
        if (isset($data['rules']) && is_array($data['rules'])) {
            $this->rules = array_map(function($item) {
                return is_array($item) ? new ScheduleRuleDTO($item) : $item;
            }, $data['rules']);
        } else {
            $this->rules = $data['rules'] ?? [];
        }
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->rules !== null) {
            $result['rules'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->rules);
        }
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        return $result;
    }
}
