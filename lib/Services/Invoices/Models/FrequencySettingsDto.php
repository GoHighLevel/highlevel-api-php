<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * FrequencySettingsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class FrequencySettingsDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var mixed
     */
    public $schedule;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->schedule = $data['schedule'] ?? null;
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
        if ($this->schedule !== null) {
            $result['schedule'] = $this->schedule;
        }
        return $result;
    }
}
