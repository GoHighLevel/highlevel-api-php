<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * BulkDisableSaasResponseDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class BulkDisableSaasResponseDto
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }
}
