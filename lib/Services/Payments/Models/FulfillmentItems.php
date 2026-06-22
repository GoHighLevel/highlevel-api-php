<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * FulfillmentItems model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class FulfillmentItems
{
    /**
     * @var string
     */
    public string $price_id;

    /**
     * @var float
     */
    public float $qty;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->price_id = $data['priceId'] ?? '';
        $this->qty = $data['qty'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->price_id !== null) {
            $result['priceId'] = $this->price_id;
        }
        if ($this->qty !== null) {
            $result['qty'] = $this->qty;
        }
        return $result;
    }
}
