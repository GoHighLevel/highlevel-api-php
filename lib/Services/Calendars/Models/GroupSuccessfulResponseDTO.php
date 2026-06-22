<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * GroupSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GroupSuccessfulResponseDTO
{
    /**
     * @var bool|null
     */
    public ?bool $success = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }
}
