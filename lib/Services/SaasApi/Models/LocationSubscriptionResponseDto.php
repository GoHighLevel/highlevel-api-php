<?php

namespace HighLevel\Services\SaasApi\Models;

/**
 * LocationSubscriptionResponseDto model
 * 
 * @package HighLevel\Services\SaasApi\Models
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
