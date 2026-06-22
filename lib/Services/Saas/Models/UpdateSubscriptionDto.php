<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * UpdateSubscriptionDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class UpdateSubscriptionDto
{
    /**
     * @var string
     */
    public string $subscription_id;

    /**
     * @var string
     */
    public string $customer_id;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->subscription_id = $data['subscriptionId'] ?? '';
        $this->customer_id = $data['customerId'] ?? '';
        $this->company_id = $data['companyId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->subscription_id !== null) {
            $result['subscriptionId'] = $this->subscription_id;
        }
        if ($this->customer_id !== null) {
            $result['customerId'] = $this->customer_id;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        return $result;
    }
}
