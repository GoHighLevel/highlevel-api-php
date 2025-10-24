<?php

namespace HighLevel\Services\SaasApi\Models;

/**
 * SaasLocationDto model
 * 
 * @package HighLevel\Services\SaasApi\Models
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
        $this->company_id = $data['companyId'] ?? '';
        $this->saas_mode = $data['saasMode'] ?? '';
        $this->subscription_id = $data['subscriptionId'] ?? '';
        $this->customer_id = $data['customerId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->provider_location_id = $data['providerLocationId'] ?? null;
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? null;
        $this->subscription_info = $data['subscriptionInfo'] ?? null;
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
