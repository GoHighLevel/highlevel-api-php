<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * SaasLocationDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class SaasLocationDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $saas_mode;

    /**
     * @var string
     */
    public string $subscription_id;

    /**
     * @var string|null
     */
    public ?string $customer_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $provider_location_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_saa_s_v2 = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $subscription_info = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->company_id = $data['companyId'] ?? '';
        $this->saas_mode = $data['saasMode'] ?? '';
        $this->subscription_id = $data['subscriptionId'] ?? '';
        $this->customer_id = $data['customerId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->provider_location_id = $data['providerLocationId'] ?? null;
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? null;
        $this->subscription_info = $data['subscriptionInfo'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->provider_location_id !== null) {
            $result['providerLocationId'] = $this->provider_location_id;
        }
        if ($this->is_saa_s_v2 !== null) {
            $result['isSaaSV2'] = $this->is_saa_s_v2;
        }
        if ($this->subscription_info !== null) {
            $result['subscriptionInfo'] = $this->subscription_info;
        }
        return $result;
    }
}
