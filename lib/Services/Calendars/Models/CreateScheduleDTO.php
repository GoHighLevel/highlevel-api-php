<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateScheduleDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateScheduleDTO
{
    /**
     * @var array&lt;ScheduleRuleDTO&gt;|null
     */
    public ?array $rules = null;

    /**
     * @var string
     */
    public string $timezone;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $calendar_ids = null;

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
        $this->timezone = $data['timezone'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->calendar_ids = $data['calendarIds'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->calendar_ids !== null) {
            $result['calendarIds'] = $this->calendar_ids;
        }
        return $result;
    }
}
