<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * UpdateLocationDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class UpdateLocationDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string
     */
    public string $company_id;

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
     * @var mixed
     */
    public $prospect_info;

    /**
     * @var mixed
     */
    public $settings;

    /**
     * @var mixed
     */
    public $social;

    /**
     * @var mixed
     */
    public $twilio;

    /**
     * @var mixed
     */
    public $mailgun;

    /**
     * @var mixed
     */
    public $snapshot;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->company_id = $data['companyId'] ?? '';
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->prospect_info = $data['prospectInfo'] ?? null;
        $this->settings = $data['settings'] ?? null;
        $this->social = $data['social'] ?? null;
        $this->twilio = $data['twilio'] ?? null;
        $this->mailgun = $data['mailgun'] ?? null;
        $this->snapshot = $data['snapshot'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
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
        if ($this->prospect_info !== null) {
            $result['prospectInfo'] = $this->prospect_info;
        }
        if ($this->settings !== null) {
            $result['settings'] = $this->settings;
        }
        if ($this->social !== null) {
            $result['social'] = $this->social;
        }
        if ($this->twilio !== null) {
            $result['twilio'] = $this->twilio;
        }
        if ($this->mailgun !== null) {
            $result['mailgun'] = $this->mailgun;
        }
        if ($this->snapshot !== null) {
            $result['snapshot'] = $this->snapshot;
        }
        return $result;
    }
}
