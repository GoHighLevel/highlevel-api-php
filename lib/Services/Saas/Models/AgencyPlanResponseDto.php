<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * AgencyPlanResponseDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class AgencyPlanResponseDto
{
    /**
     * @var string
     */
    public string $plan_id;

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
    public ?string $product_id = null;

    /**
     * @var bool
     */
    public bool $is_saa_s_v2;

    /**
     * @var string|null
     */
    public ?string $provider_location_id = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->plan_id = $data['planId'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->saas_products = $data['saasProducts'] ?? [];
        $this->add_ons = $data['addOns'] ?? null;
        $this->plan_level = $data['planLevel'] ?? 0;
        $this->trial_period = $data['trialPeriod'] ?? 0;
        $this->user_limit = $data['userLimit'] ?? null;
        $this->contact_limit = $data['contactLimit'] ?? null;
        $this->prices = $data['prices'] ?? [];
        $this->category_id = $data['categoryId'] ?? null;
        $this->snapshot_id = $data['snapshotId'] ?? null;
        $this->product_id = $data['productId'] ?? null;
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? false;
        $this->provider_location_id = $data['providerLocationId'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->plan_id !== null) {
            $result['planId'] = $this->plan_id;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->saas_products !== null) {
            $result['saasProducts'] = $this->saas_products;
        }
        if ($this->add_ons !== null) {
            $result['addOns'] = $this->add_ons;
        }
        if ($this->plan_level !== null) {
            $result['planLevel'] = $this->plan_level;
        }
        if ($this->trial_period !== null) {
            $result['trialPeriod'] = $this->trial_period;
        }
        if ($this->user_limit !== null) {
            $result['userLimit'] = $this->user_limit;
        }
        if ($this->contact_limit !== null) {
            $result['contactLimit'] = $this->contact_limit;
        }
        if ($this->prices !== null) {
            $result['prices'] = $this->prices;
        }
        if ($this->category_id !== null) {
            $result['categoryId'] = $this->category_id;
        }
        if ($this->snapshot_id !== null) {
            $result['snapshotId'] = $this->snapshot_id;
        }
        if ($this->product_id !== null) {
            $result['productId'] = $this->product_id;
        }
        if ($this->is_saa_s_v2 !== null) {
            $result['isSaaSV2'] = $this->is_saa_s_v2;
        }
        if ($this->provider_location_id !== null) {
            $result['providerLocationId'] = $this->provider_location_id;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
