<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * DeleteProductResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class DeleteProductResponseDto
{
    /**
     * @var bool
     */
    public bool $status;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
