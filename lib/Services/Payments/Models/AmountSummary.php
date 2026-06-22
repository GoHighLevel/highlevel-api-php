<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * AmountSummary model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class AmountSummary
{
    /**
     * @var float
     */
    public float $subtotal;

    /**
     * @var float|null
     */
    public ?float $discount = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->subtotal = $data['subtotal'] ?? 0;
        $this->discount = $data['discount'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->subtotal !== null) {
            $result['subtotal'] = $this->subtotal;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        return $result;
    }
}
