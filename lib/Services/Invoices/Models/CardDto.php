<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * CardDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CardDto
{
    /**
     * @var string
     */
    public string $brand;

    /**
     * @var string
     */
    public string $last4;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->brand = $data['brand'] ?? '';
        $this->last4 = $data['last4'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->brand !== null) {
            $result['brand'] = $this->brand;
        }
        if ($this->last4 !== null) {
            $result['last4'] = $this->last4;
        }
        return $result;
    }
}
