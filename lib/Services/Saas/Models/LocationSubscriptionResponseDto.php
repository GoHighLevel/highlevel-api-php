<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * LocationSubscriptionResponseDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class LocationSubscriptionResponseDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool
     */
    public bool $is_saa_s_v2;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string|null
     */
    public ?string $saas_mode = null;

    /**
     * @var string|null
     */
    public ?string $subscription_id = null;

    /**
     * @var string|null
     */
    public ?string $customer_id = null;

    /**
     * @var string|null
     */
    public ?string $product_id = null;

    /**
     * @var string|null
     */
    public ?string $price_id = null;

    /**
     * @var string|null
     */
    public ?string $saas_plan_id = null;

    /**
     * @var string|null
     */
    public ?string $subscription_status = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? false;
        $this->company_id = $data['companyId'] ?? '';
        $this->saas_mode = $data['saasMode'] ?? null;
        $this->subscription_id = $data['subscriptionId'] ?? null;
        $this->customer_id = $data['customerId'] ?? null;
        $this->product_id = $data['productId'] ?? null;
        $this->price_id = $data['priceId'] ?? null;
        $this->saas_plan_id = $data['saasPlanId'] ?? null;
        $this->subscription_status = $data['subscriptionStatus'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->is_saa_s_v2 !== null) {
            $result['isSaaSV2'] = $this->is_saa_s_v2;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->saas_mode !== null) {
            $result['saasMode'] = $this->saas_mode;
        }
        if ($this->subscription_id !== null) {
            $result['subscriptionId'] = $this->subscription_id;
        }
        if ($this->customer_id !== null) {
            $result['customerId'] = $this->customer_id;
        }
        if ($this->product_id !== null) {
            $result['productId'] = $this->product_id;
        }
        if ($this->price_id !== null) {
            $result['priceId'] = $this->price_id;
        }
        if ($this->saas_plan_id !== null) {
            $result['saasPlanId'] = $this->saas_plan_id;
        }
        if ($this->subscription_status !== null) {
            $result['subscriptionStatus'] = $this->subscription_status;
        }
        return $result;
    }
}
