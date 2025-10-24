<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * Contact model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class Contact
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $phone_label = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var bool|null
     */
    public ?bool $dnd = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var array&lt;CustomFieldSchema&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $additional_emails = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $additional_phones = null;

    /**
     * @var string|null
     */
    public ?string $date_updated = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $date_of_birth = null;

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
    public ?string $first_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $last_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $followers = null;

    /**
     * @var bool|null
     */
    public ?bool $valid_email = null;

    /**
     * @var DndSettingsSchema|null
     */
    public ?DndSettingsSchema $dnd_settings = null;

    /**
     * @var array&lt;ContactOpportunity&gt;|null
     */
    public ?array $opportunities = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * @var string|null
     */
    public ?string $business_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $search_after = null;

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
        $this->phone_label = $data['phoneLabel'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->dnd = $data['dnd'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->business_name = $data['businessName'] ?? null;
        // Handle array of CustomFieldSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
        }
        $this->tags = $data['tags'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->additional_emails = $data['additionalEmails'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
        $this->additional_phones = $data['additionalPhones'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->date_of_birth = $data['dateOfBirth'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->first_name_lower_case = $data['firstNameLowerCase'] ?? null;
        $this->last_name_lower_case = $data['lastNameLowerCase'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->followers = $data['followers'] ?? null;
        $this->valid_email = $data['validEmail'] ?? null;
        // Handle single DndSettingsSchema object
        if (isset($data['dndSettings']) && is_array($data['dndSettings'])) {
            $this->dnd_settings = new DndSettingsSchema($data['dndSettings']);
        } else {
            $this->dnd_settings = $data['dndSettings'] ?? null;
        }
        // Handle array of ContactOpportunity objects
        if (isset($data['opportunities']) && is_array($data['opportunities'])) {
            $this->opportunities = array_map(function($item) {
                return is_array($item) ? new ContactOpportunity($item) : $item;
            }, $data['opportunities']);
        } else {
            $this->opportunities = $data['opportunities'] ?? null;
        }
        $this->postal_code = $data['postalCode'] ?? null;
        $this->business_id = $data['businessId'] ?? null;
        $this->search_after = $data['searchAfter'] ?? null;
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
