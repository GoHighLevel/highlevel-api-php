<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * RecurringTaskSingleResponseDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class RecurringTaskSingleResponseDTO
{
    /**
     * @var mixed
     */
    public $recurring_task;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->recurring_task = $data['recurringTask'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->recurring_task !== null) {
            $result['recurringTask'] = $this->recurring_task;
        }
        return $result;
    }
}
