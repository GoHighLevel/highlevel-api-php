<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * CreateFulfillmentResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateFulfillmentResponseDto
{
    /**
     * @var bool
     */
    public bool $status;

    /**
     * @var mixed
     */
    public $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? false;
        $this->data = $data['data'] ?? null;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }
}
