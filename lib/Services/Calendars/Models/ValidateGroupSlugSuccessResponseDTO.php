<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * ValidateGroupSlugSuccessResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ValidateGroupSlugSuccessResponseDTO
{
    /**
     * @var bool
     */
    public bool $available;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->available = $data['available'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->available !== null) {
            $result['available'] = $this->available;
        }
        return $result;
    }
}
