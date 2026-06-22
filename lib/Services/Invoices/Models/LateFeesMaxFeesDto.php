<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * LateFeesMaxFeesDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class LateFeesMaxFeesDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var float
     */
    public float $value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->value = $data['value'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }
}
