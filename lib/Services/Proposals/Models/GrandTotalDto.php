<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * GrandTotalDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class GrandTotalDto
{
    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $discount_percentage;

    /**
     * @var array&lt;DiscountDto&gt;
     */
    public array $discounts;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->amount = $data['amount'] ?? 0;
        $this->currency = $data['currency'] ?? '';
        $this->discount_percentage = $data['discountPercentage'] ?? 0;
        // Handle array of DiscountDto objects
        if (isset($data['discounts']) && is_array($data['discounts'])) {
            $this->discounts = array_map(function($item) {
                return is_array($item) ? new DiscountDto($item) : $item;
            }, $data['discounts']);
        } else {
            $this->discounts = $data['discounts'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->discount_percentage !== null) {
            $result['discountPercentage'] = $this->discount_percentage;
        }
        if ($this->discounts !== null) {
            $result['discounts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->discounts);
        }
        return $result;
    }
}
