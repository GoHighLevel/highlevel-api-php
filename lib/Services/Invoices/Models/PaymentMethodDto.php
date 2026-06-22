<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * PaymentMethodDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class PaymentMethodDto
{
    /**
     * @var mixed
     */
    public $stripe;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->stripe = $data['stripe'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->stripe !== null) {
            $result['stripe'] = $this->stripe;
        }
        return $result;
    }
}
