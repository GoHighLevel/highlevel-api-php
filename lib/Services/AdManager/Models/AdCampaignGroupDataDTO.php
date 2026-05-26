<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * AdCampaignGroupDataDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
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
     * @var LinkedInBudgetDTO|null
     */
    public ?LinkedInBudgetDTO $budget = null;

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
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        // Handle single LinkedInBudgetDTO object
        if (isset($data['budget']) && is_array($data['budget'])) {
            $this->budget = new LinkedInBudgetDTO($data['budget']);
        } else {
            $this->budget = $data['budget'] ?? null;
        }
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
