<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AdCampaignGroupDataDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AdCampaignGroupDataDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var mixed
     */
    public $budget;

    /**
     * @var array&lt;AdCampaignDTO&gt;|null
     */
    public ?array $ad_campaigns = null;

    /**
     * @var string|null
     */
    public ?string $ad_budget_optimization = null;

    /**
     * @var string|null
     */
    public ?string $objective_type = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $ad_campaign_group_id = null;

    /**
     * @var string|null
     */
    public ?string $publishing_status = null;

    /**
     * @var string|null
     */
    public ?string $linked_in_ad_account_id = null;

    /**
     * @var bool|null
     */
    public ?bool $unpublished_changes = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var string|null
     */
    public ?string $linked_in_error = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->budget = $data['budget'] ?? null;
        // Handle array of AdCampaignDTO objects
        if (isset($data['adCampaigns']) && is_array($data['adCampaigns'])) {
            $this->ad_campaigns = array_map(function($item) {
                return is_array($item) ? new AdCampaignDTO($item) : $item;
            }, $data['adCampaigns']);
        } else {
            $this->ad_campaigns = $data['adCampaigns'] ?? null;
        }
        $this->ad_budget_optimization = $data['adBudgetOptimization'] ?? null;
        $this->objective_type = $data['objectiveType'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->ad_campaign_group_id = $data['adCampaignGroupId'] ?? null;
        $this->publishing_status = $data['publishingStatus'] ?? null;
        $this->linked_in_ad_account_id = $data['linkedInAdAccountId'] ?? null;
        $this->unpublished_changes = $data['unpublishedChanges'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->linked_in_error = $data['linkedInError'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->ad_campaigns !== null) {
            $result['adCampaigns'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->ad_campaigns);
        }
        if ($this->ad_budget_optimization !== null) {
            $result['adBudgetOptimization'] = $this->ad_budget_optimization;
        }
        if ($this->objective_type !== null) {
            $result['objectiveType'] = $this->objective_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->ad_campaign_group_id !== null) {
            $result['adCampaignGroupId'] = $this->ad_campaign_group_id;
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->linked_in_ad_account_id !== null) {
            $result['linkedInAdAccountId'] = $this->linked_in_ad_account_id;
        }
        if ($this->unpublished_changes !== null) {
            $result['unpublishedChanges'] = $this->unpublished_changes;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->linked_in_error !== null) {
            $result['linkedInError'] = $this->linked_in_error;
        }
        return $result;
    }
}
