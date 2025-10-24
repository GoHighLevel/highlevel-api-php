<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * InstallerDetailsDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class InstallerDetailsDTO
{
    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string
     */
    public string $company_name;

    /**
     * @var string
     */
    public string $company_email;

    /**
     * @var string|null
     */
    public ?string $company_owner_full_name = null;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var bool
     */
    public bool $is_whitelabel_company;

    /**
     * @var string|null
     */
    public ?string $company_high_level_plan = null;

    /**
     * @var string|null
     */
    public ?string $marketplace_app_plan_id = null;

    /**
     * @var mixed
     */
    public mixed $whitelabel_details;

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
        $this->company_id = $data['companyId'] ?? '';
        $this->location_id = $data['locationId'] ?? null;
        $this->company_name = $data['companyName'] ?? '';
        $this->company_email = $data['companyEmail'] ?? '';
        $this->company_owner_full_name = $data['companyOwnerFullName'] ?? null;
        $this->user_id = $data['userId'] ?? '';
        $this->is_whitelabel_company = $data['isWhitelabelCompany'] ?? false;
        $this->company_high_level_plan = $data['companyHighLevelPlan'] ?? null;
        $this->marketplace_app_plan_id = $data['marketplaceAppPlanId'] ?? null;
        $this->whitelabel_details = $data['whitelabelDetails'] ?? null;
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
