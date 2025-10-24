<?php

namespace HighLevel\Services\SaasApi\Models;

/**
 * SaasPlanResponseDto model
 * 
 * @package HighLevel\Services\SaasApi\Models
 */
class SaasPlanResponseDto
{
    /**
     * @var string
     */
    public string $plan_id;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var array&lt;string&gt;
     */
    public array $saas_products;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $add_ons = null;

    /**
     * @var float
     */
    public float $plan_level;

    /**
     * @var float
     */
    public float $trial_period;

    /**
     * @var float|null
     */
    public ?float $setup_fee = null;

    /**
     * @var float|null
     */
    public ?float $user_limit = null;

    /**
     * @var float|null
     */
    public ?float $contact_limit = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;
     */
    public array $prices;

    /**
     * @var string|null
     */
    public ?string $category_id = null;

    /**
     * @var string|null
     */
    public ?string $snapshot_id = null;

    /**
     * @var string|null
     */
    public ?string $provider_location_id = null;

    /**
     * @var string|null
     */
    public ?string $product_id = null;

    /**
     * @var bool
     */
    public bool $is_saa_s_v2;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

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
        $this->plan_id = $data['planId'] ?? '';
        $this->company_id = $data['companyId'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->saas_products = $data['saasProducts'] ?? [];
        $this->add_ons = $data['addOns'] ?? null;
        $this->plan_level = $data['planLevel'] ?? 0;
        $this->trial_period = $data['trialPeriod'] ?? 0;
        $this->setup_fee = $data['setupFee'] ?? null;
        $this->user_limit = $data['userLimit'] ?? null;
        $this->contact_limit = $data['contactLimit'] ?? null;
        $this->prices = $data['prices'] ?? [];
        $this->category_id = $data['categoryId'] ?? null;
        $this->snapshot_id = $data['snapshotId'] ?? null;
        $this->provider_location_id = $data['providerLocationId'] ?? null;
        $this->product_id = $data['productId'] ?? null;
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
