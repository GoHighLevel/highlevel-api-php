<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * OpenHour model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class OpenHour
{
    /**
     * @var array&lt;float&gt;
     */
    public array $days_of_the_week;

    /**
     * @var array&lt;Hour&gt;
     */
    public array $hours;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->days_of_the_week = $data['daysOfTheWeek'] ?? [];
        // Handle array of Hour objects
        if (isset($data['hours']) && is_array($data['hours'])) {
            $this->hours = array_map(function($item) {
                return is_array($item) ? new Hour($item) : $item;
            }, $data['hours']);
        } else {
            $this->hours = $data['hours'] ?? [];
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
        if ($this->days_of_the_week !== null) {
            $result['daysOfTheWeek'] = $this->days_of_the_week;
        }
        if ($this->hours !== null) {
            $result['hours'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->hours);
        }
        return $result;
    }
}
