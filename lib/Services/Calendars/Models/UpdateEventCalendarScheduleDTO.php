<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * UpdateEventCalendarScheduleDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class UpdateEventCalendarScheduleDTO
{
    /**
     * @var array&lt;ScheduleRuleDTO&gt;|null
     */
    public ?array $rules = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ScheduleRuleDTO objects
        if (isset($data['rules']) && is_array($data['rules'])) {
            $this->rules = array_map(function($item) {
                return is_array($item) ? new ScheduleRuleDTO($item) : $item;
            }, $data['rules']);
        } else {
            $this->rules = $data['rules'] ?? null;
        }
        $this->timezone = $data['timezone'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->rules !== null) {
            $result['rules'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->rules);
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        return $result;
    }
}
