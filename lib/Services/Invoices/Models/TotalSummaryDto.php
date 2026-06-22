<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * TotalSummaryDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class TotalSummaryDto
{
    /**
     * @var float
     */
    public float $sub_total;

    /**
     * @var float
     */
    public float $discount;

    /**
     * @var float
     */
    public float $tax;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->sub_total = $data['subTotal'] ?? 0;
        $this->discount = $data['discount'] ?? 0;
        $this->tax = $data['tax'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->sub_total !== null) {
            $result['subTotal'] = $this->sub_total;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->tax !== null) {
            $result['tax'] = $this->tax;
        }
        return $result;
    }
}
