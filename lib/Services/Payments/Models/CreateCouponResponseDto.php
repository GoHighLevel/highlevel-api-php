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
    public mixed $apply_to_future_payments_config;

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
