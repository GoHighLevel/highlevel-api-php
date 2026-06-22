<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * CouponDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CouponDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var float
     */
    public float $usage_count;

    /**
     * @var float
     */
    public float $limit_per_customer;

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
    public string $status;

    /**
     * @var string
     */
    public string $start_date;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * @var bool
     */
    public bool $apply_to_future_payments;

    /**
     * @var mixed
     */
    public $apply_to_future_payments_config;

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
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->usage_count = $data['usageCount'] ?? 0;
        $this->limit_per_customer = $data['limitPerCustomer'] ?? 0;
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->code = $data['code'] ?? '';
        $this->discount_type = $data['discountType'] ?? '';
        $this->discount_value = $data['discountValue'] ?? 0;
        $this->status = $data['status'] ?? '';
        $this->start_date = $data['startDate'] ?? '';
        $this->end_date = $data['endDate'] ?? null;
        $this->apply_to_future_payments = $data['applyToFuturePayments'] ?? false;
        $this->apply_to_future_payments_config = $data['applyToFuturePaymentsConfig'] ?? null;
        $this->product_ids = $data['productIds'] ?? null;
        $this->price_ids = $data['priceIds'] ?? null;
        $this->variant_ids = $data['variantIds'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->usage_count !== null) {
            $result['usageCount'] = $this->usage_count;
        }
        if ($this->limit_per_customer !== null) {
            $result['limitPerCustomer'] = $this->limit_per_customer;
        }
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->apply_to_future_payments !== null) {
            $result['applyToFuturePayments'] = $this->apply_to_future_payments;
        }
        if ($this->apply_to_future_payments_config !== null) {
            $result['applyToFuturePaymentsConfig'] = $this->apply_to_future_payments_config;
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
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
