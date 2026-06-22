<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * ShippingOptionsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ShippingOptionsDto
{
    /**
     * @var mixed
     */
    public $weight;

    /**
     * @var mixed
     */
    public $dimensions;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->weight = $data['weight'] ?? null;
        $this->dimensions = $data['dimensions'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->weight !== null) {
            $result['weight'] = $this->weight;
        }
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        return $result;
    }
}
