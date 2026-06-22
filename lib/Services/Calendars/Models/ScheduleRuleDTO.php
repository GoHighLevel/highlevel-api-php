<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * ScheduleRuleDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ScheduleRuleDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;ScheduleIntervalDTO&gt;
     */
    public array $intervals;

    /**
     * @var string|null
     */
    public ?string $date = null;

    /**
     * @var string|null
     */
    public ?string $day = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        // Handle array of ScheduleIntervalDTO objects
        if (isset($data['intervals']) && is_array($data['intervals'])) {
            $this->intervals = array_map(function($item) {
                return is_array($item) ? new ScheduleIntervalDTO($item) : $item;
            }, $data['intervals']);
        } else {
            $this->intervals = $data['intervals'] ?? [];
        }
        $this->date = $data['date'] ?? null;
        $this->day = $data['day'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->intervals !== null) {
            $result['intervals'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->intervals);
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->day !== null) {
            $result['day'] = $this->day;
        }
        return $result;
    }
}
