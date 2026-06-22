<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * GetShippingZoneResponseDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class GetShippingZoneResponseDto
{
    /**
     * @var bool
     */
    public bool $status;

    /**
     * @var string|null
     */
    public ?string $message = null;

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
        $this->message = $data['message'] ?? null;
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
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }
}
