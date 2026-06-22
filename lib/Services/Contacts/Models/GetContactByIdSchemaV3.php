<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * GetContactByIdSchemaV3 model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetContactByIdSchemaV3
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

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
    public ?string $email_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var bool|null
     */
    public ?bool $dnd = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

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
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string|null
     */
    public ?string $date_of_birth = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $date_updated = null;

    /**
     * @var string|null
     */
    public ?string $attachments = null;

    /**
     * @var string|null
     */
    public ?string $ssn = null;

    /**
     * @var string|null
     */
    public ?string $keyword = null;

    /**
     * @var string|null
     */
    public ?string $first_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $full_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $last_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $last_activity = null;

    /**
     * @var array&lt;CustomFieldSchema&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * @var string|null
     */
    public ?string $business_id = null;

    /**
     * @var mixed
     */
    public $attribution_source;

    /**
     * @var mixed
     */
    public $last_attribution_source;

    /**
     * @var string|null
     */
    public ?string $visitor_id = null;

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
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->email_lower_case = $data['emailLowerCase'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->dnd = $data['dnd'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->address1 = $data['address1'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->date_of_birth = $data['dateOfBirth'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->attachments = $data['attachments'] ?? null;
        $this->ssn = $data['ssn'] ?? null;
        $this->keyword = $data['keyword'] ?? null;
        $this->first_name_lower_case = $data['firstNameLowerCase'] ?? null;
        $this->full_name_lower_case = $data['fullNameLowerCase'] ?? null;
        $this->last_name_lower_case = $data['lastNameLowerCase'] ?? null;
        $this->last_activity = $data['lastActivity'] ?? null;
        // Handle array of CustomFieldSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
        }
        $this->business_id = $data['businessId'] ?? null;
        $this->attribution_source = $data['attributionSource'] ?? null;
        $this->last_attribution_source = $data['lastAttributionSource'] ?? null;
        $this->visitor_id = $data['visitorId'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
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
        if ($this->email_lower_case !== null) {
            $result['emailLowerCase'] = $this->email_lower_case;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->company_name !== null) {
            $result['companyName'] = $this->company_name;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->dnd !== null) {
            $result['dnd'] = $this->dnd;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
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
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->postal_code !== null) {
            $result['postalCode'] = $this->postal_code;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->date_of_birth !== null) {
            $result['dateOfBirth'] = $this->date_of_birth;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->ssn !== null) {
            $result['ssn'] = $this->ssn;
        }
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->first_name_lower_case !== null) {
            $result['firstNameLowerCase'] = $this->first_name_lower_case;
        }
        if ($this->full_name_lower_case !== null) {
            $result['fullNameLowerCase'] = $this->full_name_lower_case;
        }
        if ($this->last_name_lower_case !== null) {
            $result['lastNameLowerCase'] = $this->last_name_lower_case;
        }
        if ($this->last_activity !== null) {
            $result['lastActivity'] = $this->last_activity;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_fields);
        }
        if ($this->business_id !== null) {
            $result['businessId'] = $this->business_id;
        }
        if ($this->attribution_source !== null) {
            $result['attributionSource'] = $this->attribution_source;
        }
        if ($this->last_attribution_source !== null) {
            $result['lastAttributionSource'] = $this->last_attribution_source;
        }
        if ($this->visitor_id !== null) {
            $result['visitorId'] = $this->visitor_id;
        }
        if ($this->dnd_settings !== null) {
            $result['dndSettings'] = $this->dnd_settings;
        }
        return $result;
    }
}
