<?php

namespace HighLevel\Services\SaasApi\Models;

/**
 * EnableSaasDto model
 * 
 * @package HighLevel\Services\SaasApi\Models
 */
class EnableSaasDto
{
    /**
     * @var string|null
     */
    public ?string $stripe_account_id = null;

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
    public ?string $stripe_customer_id = null;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var bool
     */
    public bool $is_saa_s_v2;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $provider_location_id = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $saas_plan_id = null;

    /**
     * @var string|null
     */
    public ?string $price_id = null;

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
        $this->stripe_account_id = $data['stripeAccountId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->stripe_customer_id = $data['stripeCustomerId'] ?? null;
        $this->company_id = $data['companyId'] ?? '';
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? false;
        $this->contact_id = $data['contactId'] ?? null;
        $this->provider_location_id = $data['providerLocationId'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->saas_plan_id = $data['saasPlanId'] ?? null;
        $this->price_id = $data['priceId'] ?? null;
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
