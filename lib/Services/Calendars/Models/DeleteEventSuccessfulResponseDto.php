<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * DeleteEventSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class DeleteEventSuccessfulResponseDto
{
    /**
     * @var bool|null
     */
    public ?bool $succeeded = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeeded = $data['succeeded'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->succeeded !== null) {
            $result['succeeded'] = $this->succeeded;
        }
        return $result;
    }
}
