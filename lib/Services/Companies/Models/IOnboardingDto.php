<?php

namespace HighLevel\Services\Companies\Models;

/**
 * IOnboardingDto model
 * 
 * @package HighLevel\Services\Companies\Models
 */
class IOnboardingDto
{
    /**
     * @var bool
     */
    public bool $pending;

    /**
     * @var bool|null
     */
    public ?bool $have_website = null;

    /**
     * @var string|null
     */
    public ?string $website_url = null;

    /**
     * @var string|null
     */
    public ?string $industry_served = null;

    /**
     * @var string|null
     */
    public ?string $customer_count = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tools = null;

    /**
     * @var bool|null
     */
    public ?bool $location = null;

    /**
     * @var bool|null
     */
    public ?bool $conversation_demo = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $snapshot_id = null;

    /**
     * @var string|null
     */
    public ?string $plan_id = null;

    /**
     * @var bool|null
     */
    public ?bool $affiliate_signup = null;

    /**
     * @var bool|null
     */
    public ?bool $has_joined_kickoff_call = null;

    /**
     * @var bool|null
     */
    public ?bool $kickoff_action_taken = null;

    /**
     * @var bool|null
     */
    public ?bool $has_joined_implementation_call = null;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta_data = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->pending = $data['pending'] ?? false;
        $this->have_website = $data['haveWebsite'] ?? null;
        $this->website_url = $data['websiteUrl'] ?? null;
        $this->industry_served = $data['industryServed'] ?? null;
        $this->customer_count = $data['customerCount'] ?? null;
        $this->tools = $data['tools'] ?? null;
        $this->location = $data['location'] ?? null;
        $this->conversation_demo = $data['conversationDemo'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->snapshot_id = $data['snapshotId'] ?? null;
        $this->plan_id = $data['planId'] ?? null;
        $this->affiliate_signup = $data['affiliateSignup'] ?? null;
        $this->has_joined_kickoff_call = $data['hasJoinedKickoffCall'] ?? null;
        $this->kickoff_action_taken = $data['kickoffActionTaken'] ?? null;
        $this->has_joined_implementation_call = $data['hasJoinedImplementationCall'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->meta_data = $data['metaData'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->pending !== null) {
            $result['pending'] = $this->pending;
        }
        if ($this->have_website !== null) {
            $result['haveWebsite'] = $this->have_website;
        }
        if ($this->website_url !== null) {
            $result['websiteUrl'] = $this->website_url;
        }
        if ($this->industry_served !== null) {
            $result['industryServed'] = $this->industry_served;
        }
        if ($this->customer_count !== null) {
            $result['customerCount'] = $this->customer_count;
        }
        if ($this->tools !== null) {
            $result['tools'] = $this->tools;
        }
        if ($this->location !== null) {
            $result['location'] = $this->location;
        }
        if ($this->conversation_demo !== null) {
            $result['conversationDemo'] = $this->conversation_demo;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->snapshot_id !== null) {
            $result['snapshotId'] = $this->snapshot_id;
        }
        if ($this->plan_id !== null) {
            $result['planId'] = $this->plan_id;
        }
        if ($this->affiliate_signup !== null) {
            $result['affiliateSignup'] = $this->affiliate_signup;
        }
        if ($this->has_joined_kickoff_call !== null) {
            $result['hasJoinedKickoffCall'] = $this->has_joined_kickoff_call;
        }
        if ($this->kickoff_action_taken !== null) {
            $result['kickoffActionTaken'] = $this->kickoff_action_taken;
        }
        if ($this->has_joined_implementation_call !== null) {
            $result['hasJoinedImplementationCall'] = $this->has_joined_implementation_call;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->meta_data !== null) {
            $result['metaData'] = $this->meta_data;
        }
        return $result;
    }
}
