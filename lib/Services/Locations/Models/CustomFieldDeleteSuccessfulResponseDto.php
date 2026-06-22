<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * CustomFieldDeleteSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomFieldDeleteSuccessfulResponseDto
{
    /**
     * @var bool|null
     */
    public ?bool $succeded = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeded = $data['succeded'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->succeded !== null) {
            $result['succeded'] = $this->succeded;
        }
        return $result;
    }
}
