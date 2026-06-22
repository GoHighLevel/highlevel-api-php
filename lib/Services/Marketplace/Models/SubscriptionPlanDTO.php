<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * SubscriptionPlanDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class SubscriptionPlanDTO
{
    /**
     * @var float
     */
    public float $reselling_amount;

    /**
     * @var float
     */
    public float $base_amount;

    /**
     * @var string
     */
    public string $plan_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $features;

    /**
     * @var string
     */
    public string $payment_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $payment_time;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->reselling_amount = $data['resellingAmount'] ?? 0;
        $this->base_amount = $data['baseAmount'] ?? 0;
        $this->plan_id = $data['planId'] ?? '';
        $this->features = $data['features'] ?? [];
        $this->payment_type = $data['paymentType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->payment_time = $data['paymentTime'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->reselling_amount !== null) {
            $result['resellingAmount'] = $this->reselling_amount;
        }
        if ($this->base_amount !== null) {
            $result['baseAmount'] = $this->base_amount;
        }
        if ($this->plan_id !== null) {
            $result['planId'] = $this->plan_id;
        }
        if ($this->features !== null) {
            $result['features'] = $this->features;
        }
        if ($this->payment_type !== null) {
            $result['paymentType'] = $this->payment_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->payment_time !== null) {
            $result['paymentTime'] = $this->payment_time;
        }
        return $result;
    }
}
