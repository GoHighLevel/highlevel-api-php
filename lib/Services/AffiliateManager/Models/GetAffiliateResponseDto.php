<?php

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * GetAffiliateResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class GetAffiliateResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $first_name = null;

    /**
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool|null
     */
    public ?bool $active = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $created_by = null;

    /**
     * @var string|null
     */
    public ?string $facebook_url = null;

    /**
     * @var string|null
     */
    public ?string $instagram_url = null;

    /**
     * @var string|null
     */
    public ?string $linked_in_url = null;

    /**
     * @var string|null
     */
    public ?string $twitter_url = null;

    /**
     * @var string|null
     */
    public ?string $youtube_url = null;

    /**
     * @var string|null
     */
    public ?string $website_url = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $campaign_ids = null;

    /**
     * @var string|null
     */
    public ?string $vat_id = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var string|null
     */
    public ?string $w8_form = null;

    /**
     * @var string|null
     */
    public ?string $w9_form = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $last_updated_by = null;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var float|null
     */
    public ?float $revenue = null;

    /**
     * @var float|null
     */
    public ?float $customer = null;

    /**
     * @var float|null
     */
    public ?float $lead = null;

    /**
     * @var float|null
     */
    public ?float $dropped_customer = null;

    /**
     * @var float|null
     */
    public ?float $click_count = null;

    /**
     * @var float|null
     */
    public ?float $paid = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var float|null
     */
    public ?float $owned = null;

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
        $this->id = $data['_id'] ?? '';
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->active = $data['active'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->facebook_url = $data['facebookUrl'] ?? null;
        $this->instagram_url = $data['instagramUrl'] ?? null;
        $this->linked_in_url = $data['linkedInUrl'] ?? null;
        $this->twitter_url = $data['twitterUrl'] ?? null;
        $this->youtube_url = $data['youtubeUrl'] ?? null;
        $this->website_url = $data['websiteUrl'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        $this->campaign_ids = $data['campaignIds'] ?? null;
        $this->vat_id = $data['vatId'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->w8_form = $data['w8Form'] ?? null;
        $this->w9_form = $data['w9Form'] ?? null;
        $this->last_updated_by = $data['lastUpdatedBy'] ?? null;
        $this->email = $data['email'] ?? '';
        $this->revenue = $data['revenue'] ?? null;
        $this->customer = $data['customer'] ?? null;
        $this->lead = $data['lead'] ?? null;
        $this->dropped_customer = $data['droppedCustomer'] ?? null;
        $this->click_count = $data['clickCount'] ?? null;
        $this->paid = $data['paid'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->owned = $data['owned'] ?? null;
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
