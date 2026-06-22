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
            $result['_id'] = $this->id;
        }
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->facebook_url !== null) {
            $result['facebookUrl'] = $this->facebook_url;
        }
        if ($this->instagram_url !== null) {
            $result['instagramUrl'] = $this->instagram_url;
        }
        if ($this->linked_in_url !== null) {
            $result['linkedInUrl'] = $this->linked_in_url;
        }
        if ($this->twitter_url !== null) {
            $result['twitterUrl'] = $this->twitter_url;
        }
        if ($this->youtube_url !== null) {
            $result['youtubeUrl'] = $this->youtube_url;
        }
        if ($this->website_url !== null) {
            $result['websiteUrl'] = $this->website_url;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->campaign_ids !== null) {
            $result['campaignIds'] = $this->campaign_ids;
        }
        if ($this->vat_id !== null) {
            $result['vatId'] = $this->vat_id;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->w8_form !== null) {
            $result['w8Form'] = $this->w8_form;
        }
        if ($this->w9_form !== null) {
            $result['w9Form'] = $this->w9_form;
        }
        if ($this->last_updated_by !== null) {
            $result['lastUpdatedBy'] = $this->last_updated_by;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->revenue !== null) {
            $result['revenue'] = $this->revenue;
        }
        if ($this->customer !== null) {
            $result['customer'] = $this->customer;
        }
        if ($this->lead !== null) {
            $result['lead'] = $this->lead;
        }
        if ($this->dropped_customer !== null) {
            $result['droppedCustomer'] = $this->dropped_customer;
        }
        if ($this->click_count !== null) {
            $result['clickCount'] = $this->click_count;
        }
        if ($this->paid !== null) {
            $result['paid'] = $this->paid;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->owned !== null) {
            $result['owned'] = $this->owned;
        }
        return $result;
    }
}
