<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * Availability model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class Availability
{
    /**
     * @var string
     */
    public string $date;

    /**
     * @var array&lt;Hour&gt;
     */
    public array $hours;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->date = $data['date'] ?? '';
        // Handle array of Hour objects
        if (isset($data['hours']) && is_array($data['hours'])) {
            $this->hours = array_map(function($item) {
                return is_array($item) ? new Hour($item) : $item;
            }, $data['hours']);
        } else {
            $this->hours = $data['hours'] ?? [];
        }
        $this->deleted = $data['deleted'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->hours !== null) {
            $result['hours'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->hours);
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        return $result;
    }
}
