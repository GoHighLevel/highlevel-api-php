<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * GetAvailableShippingRates model
 * 
 * @package HighLevel\Services\Store\Models
 */
class GetAvailableShippingRates
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $country;

    /**
     * @var mixed
     */
    public $address;

    /**
     * @var string|null
     */
    public ?string $amount_available = null;

    /**
     * @var float
     */
    public float $total_order_amount;

    /**
     * @var bool|null
     */
    public ?bool $weight_available = null;

    /**
     * @var float
     */
    public float $total_order_weight;

    /**
     * @var mixed
     */
    public $source;

    /**
     * @var array&lt;ProductItem&gt;
     */
    public array $products;

    /**
     * @var string|null
     */
    public ?string $coupon_code = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->address = $data['address'] ?? null;
        $this->amount_available = $data['amountAvailable'] ?? null;
        $this->total_order_amount = $data['totalOrderAmount'] ?? 0;
        $this->weight_available = $data['weightAvailable'] ?? null;
        $this->total_order_weight = $data['totalOrderWeight'] ?? 0;
        $this->source = $data['source'] ?? null;
        // Handle array of ProductItem objects
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = array_map(function($item) {
                return is_array($item) ? new ProductItem($item) : $item;
            }, $data['products']);
        } else {
            $this->products = $data['products'] ?? [];
        }
        $this->coupon_code = $data['couponCode'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->amount_available !== null) {
            $result['amountAvailable'] = $this->amount_available;
        }
        if ($this->total_order_amount !== null) {
            $result['totalOrderAmount'] = $this->total_order_amount;
        }
        if ($this->weight_available !== null) {
            $result['weightAvailable'] = $this->weight_available;
        }
        if ($this->total_order_weight !== null) {
            $result['totalOrderWeight'] = $this->total_order_weight;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->products !== null) {
            $result['products'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->products);
        }
        if ($this->coupon_code !== null) {
            $result['couponCode'] = $this->coupon_code;
        }
        return $result;
    }
}
