<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * LookBusyConfiguration model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class LookBusyConfiguration
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var float
     */
    public float $look_busy_percentage;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->look_busy_percentage = $data['LookBusyPercentage'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->look_busy_percentage !== null) {
            $result['LookBusyPercentage'] = $this->look_busy_percentage;
        }
        return $result;
    }
}
