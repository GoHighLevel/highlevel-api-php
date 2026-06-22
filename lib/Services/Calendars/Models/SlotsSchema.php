<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * SlotsSchema model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class SlotsSchema
{
    /**
     * @var array&lt;string&gt;
     */
    public array $slots;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->slots = $data['slots'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->slots !== null) {
            $result['slots'] = $this->slots;
        }
        return $result;
    }
}
