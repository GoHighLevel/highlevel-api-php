<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * GetLocationByIdSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetLocationByIdSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $domain = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string|null
     */
    public ?string $logo_url = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

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
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var BusinessSchema|null
     */
    public ?BusinessSchema $business = null;

    /**
     * @var SocialSchema|null
     */
    public ?SocialSchema $social = null;

    /**
     * @var SettingsSchema|null
     */
    public ?SettingsSchema $settings = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $reseller = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->company_id = $data['companyId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->domain = $data['domain'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->logo_url = $data['logoUrl'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
        // Handle single BusinessSchema object
        if (isset($data['business']) && is_array($data['business'])) {
            $this->business = new BusinessSchema($data['business']);
        } else {
            $this->business = $data['business'] ?? null;
        }
        // Handle single SocialSchema object
        if (isset($data['social']) && is_array($data['social'])) {
            $this->social = new SocialSchema($data['social']);
        } else {
            $this->social = $data['social'] ?? null;
        }
        // Handle single SettingsSchema object
        if (isset($data['settings']) && is_array($data['settings'])) {
            $this->settings = new SettingsSchema($data['settings']);
        } else {
            $this->settings = $data['settings'] ?? null;
        }
        $this->reseller = $data['reseller'] ?? null;
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
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->domain !== null) {
            $result['domain'] = $this->domain;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->logo_url !== null) {
            $result['logoUrl'] = $this->logo_url;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->postal_code !== null) {
            $result['postalCode'] = $this->postal_code;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->business !== null) {
            $result['business'] = is_object($this->business) && method_exists($this->business, 'toArray') 
                ? $this->business->toArray() 
                : $this->business;
        }
        if ($this->social !== null) {
            $result['social'] = is_object($this->social) && method_exists($this->social, 'toArray') 
                ? $this->social->toArray() 
                : $this->social;
        }
        if ($this->settings !== null) {
            $result['settings'] = is_object($this->settings) && method_exists($this->settings, 'toArray') 
                ? $this->settings->toArray() 
                : $this->settings;
        }
        if ($this->reseller !== null) {
            $result['reseller'] = $this->reseller;
        }
        return $result;
    }
}
