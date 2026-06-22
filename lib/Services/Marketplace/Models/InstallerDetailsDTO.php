<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public string $relationship_number;

    /**
     * @var string|null
     */
    public ?string $company_email = null;

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
    public ?string $company_plan = null;

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
    public $whitelabel_details;

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
        $this->relationship_number = $data['relationshipNumber'] ?? '';
        $this->company_email = $data['companyEmail'] ?? null;
        $this->company_owner_full_name = $data['companyOwnerFullName'] ?? null;
        $this->user_id = $data['userId'] ?? '';
        $this->is_whitelabel_company = $data['isWhitelabelCompany'] ?? false;
        $this->company_plan = $data['companyPlan'] ?? null;
        $this->company_high_level_plan = $data['companyHighLevelPlan'] ?? null;
        $this->marketplace_app_plan_id = $data['marketplaceAppPlanId'] ?? null;
        $this->whitelabel_details = $data['whitelabelDetails'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->company_name !== null) {
            $result['companyName'] = $this->company_name;
        }
        if ($this->relationship_number !== null) {
            $result['relationshipNumber'] = $this->relationship_number;
        }
        if ($this->company_email !== null) {
            $result['companyEmail'] = $this->company_email;
        }
        if ($this->company_owner_full_name !== null) {
            $result['companyOwnerFullName'] = $this->company_owner_full_name;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->is_whitelabel_company !== null) {
            $result['isWhitelabelCompany'] = $this->is_whitelabel_company;
        }
        if ($this->company_plan !== null) {
            $result['companyPlan'] = $this->company_plan;
        }
        if ($this->company_high_level_plan !== null) {
            $result['companyHighLevelPlan'] = $this->company_high_level_plan;
        }
        if ($this->marketplace_app_plan_id !== null) {
            $result['marketplaceAppPlanId'] = $this->marketplace_app_plan_id;
        }
        if ($this->whitelabel_details !== null) {
            $result['whitelabelDetails'] = $this->whitelabel_details;
        }
        return $result;
    }
}
