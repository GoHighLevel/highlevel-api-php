<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * CreateCouponParams model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateCouponParams
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
    public string $name;

    /**
     * @var string
     */
    public string $code;

    /**
     * @var string
     */
    public string $discount_type;

    /**
     * @var float
     */
    public float $discount_value;

    /**
     * @var string
     */
    public string $start_date;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * @var float|null
     */
    public ?float $usage_limit = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $product_ids = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $price_ids = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $variant_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $apply_to_future_payments = null;

    /**
     * @var mixed
     */
    public $apply_to_future_payments_config;

    /**
     * @var bool|null
     */
    public ?bool $limit_per_customer = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->code = $data['code'] ?? '';
        $this->discount_type = $data['discountType'] ?? '';
        $this->discount_value = $data['discountValue'] ?? 0;
        $this->start_date = $data['startDate'] ?? '';
        $this->end_date = $data['endDate'] ?? null;
        $this->usage_limit = $data['usageLimit'] ?? null;
        $this->product_ids = $data['productIds'] ?? null;
        $this->price_ids = $data['priceIds'] ?? null;
        $this->variant_ids = $data['variantIds'] ?? null;
        $this->apply_to_future_payments = $data['applyToFuturePayments'] ?? null;
        $this->apply_to_future_payments_config = $data['applyToFuturePaymentsConfig'] ?? null;
        $this->limit_per_customer = $data['limitPerCustomer'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->discount_type !== null) {
            $result['discountType'] = $this->discount_type;
        }
        if ($this->discount_value !== null) {
            $result['discountValue'] = $this->discount_value;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->usage_limit !== null) {
            $result['usageLimit'] = $this->usage_limit;
        }
        if ($this->product_ids !== null) {
            $result['productIds'] = $this->product_ids;
        }
        if ($this->price_ids !== null) {
            $result['priceIds'] = $this->price_ids;
        }
        if ($this->variant_ids !== null) {
            $result['variantIds'] = $this->variant_ids;
        }
        if ($this->apply_to_future_payments !== null) {
            $result['applyToFuturePayments'] = $this->apply_to_future_payments;
        }
        if ($this->apply_to_future_payments_config !== null) {
            $result['applyToFuturePaymentsConfig'] = $this->apply_to_future_payments_config;
        }
        if ($this->limit_per_customer !== null) {
            $result['limitPerCustomer'] = $this->limit_per_customer;
        }
        return $result;
    }
}
