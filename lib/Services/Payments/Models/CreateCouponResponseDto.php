<?php

namespace HighLevel\Services\Payments\Models;

/**
 * CreateCouponResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateCouponResponseDto
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
     * @var string
     */
    public string $trace_id;

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
        $this->user_id = $data['userId'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->trace_id = $data['traceId'] ?? '';
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
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
