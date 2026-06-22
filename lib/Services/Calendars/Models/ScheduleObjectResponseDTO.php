<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ScheduleObjectResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ScheduleObjectResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;ScheduleRuleDTO&gt;
     */
    public array $rules;

    /**
     * @var string
     */
    public string $timezone;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string
     */
    public string $date_updated;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $calendar_ids = null;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        // Handle array of ScheduleRuleDTO objects
        if (isset($data['rules']) && is_array($data['rules'])) {
            $this->rules = array_map(function($item) {
                return is_array($item) ? new ScheduleRuleDTO($item) : $item;
            }, $data['rules']);
        } else {
            $this->rules = $data['rules'] ?? [];
        }
        $this->timezone = $data['timezone'] ?? '';
        $this->date_added = $data['dateAdded'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->calendar_ids = $data['calendarIds'] ?? null;
        $this->deleted = $data['deleted'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->rules !== null) {
            $result['rules'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->rules);
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->calendar_ids !== null) {
            $result['calendarIds'] = $this->calendar_ids;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        return $result;
    }
}
