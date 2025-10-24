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
