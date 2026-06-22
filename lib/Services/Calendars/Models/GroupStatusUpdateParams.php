<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * GroupStatusUpdateParams model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GroupStatusUpdateParams
{
    /**
     * @var bool
     */
    public bool $is_active;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->is_active = $data['isActive'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        return $result;
    }
}
