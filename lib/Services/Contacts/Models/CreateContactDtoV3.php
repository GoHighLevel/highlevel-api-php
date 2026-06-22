<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateContactDtoV3 model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateContactDtoV3
{
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
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $gender = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $address1 = null;

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
     * @var bool|null
     */
    public ?bool $dnd = null;

    /**
     * @var mixed
     */
    public $inbound_dnd_settings;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $date_of_birth = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var mixed
     */
    public $dnd_settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->gender = $data['gender'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->address1 = $data['address1'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->dnd = $data['dnd'] ?? null;
        $this->inbound_dnd_settings = $data['inboundDndSettings'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->custom_fields = $data['customFields'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->date_of_birth = $data['dateOfBirth'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->dnd_settings = $data['dndSettings'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->address1 !== null) {
            $result['address1'] = $this->address1;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
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
        if ($this->dnd !== null) {
            $result['dnd'] = $this->dnd;
        }
        if ($this->inbound_dnd_settings !== null) {
            $result['inboundDndSettings'] = $this->inbound_dnd_settings;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = $this->custom_fields;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->date_of_birth !== null) {
            $result['dateOfBirth'] = $this->date_of_birth;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->company_name !== null) {
            $result['companyName'] = $this->company_name;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->dnd_settings !== null) {
            $result['dndSettings'] = $this->dnd_settings;
        }
        return $result;
    }
}
