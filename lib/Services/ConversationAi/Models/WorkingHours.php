<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * WorkingHours model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class WorkingHours
{
    /**
     * @var float
     */
    public float $day_of_the_week;

    /**
     * @var array&lt;Interval&gt;|null
     */
    public ?array $intervals = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->day_of_the_week = $data['dayOfTheWeek'] ?? 0;
        // Handle array of Interval objects
        if (isset($data['intervals']) && is_array($data['intervals'])) {
            $this->intervals = array_map(function($item) {
                return is_array($item) ? new Interval($item) : $item;
            }, $data['intervals']);
        } else {
            $this->intervals = $data['intervals'] ?? null;
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
        if ($this->day_of_the_week !== null) {
            $result['dayOfTheWeek'] = $this->day_of_the_week;
        }
        if ($this->intervals !== null) {
            $result['intervals'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->intervals);
        }
        return $result;
    }
}
