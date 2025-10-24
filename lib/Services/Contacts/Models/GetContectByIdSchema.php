<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * GetContectByIdSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetContectByIdSchema
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
     * @var DndSettingsSchema|null
     */
    public ?DndSettingsSchema $dnd_settings = null;

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
     * @var AttributionSource|null
     */
    public ?AttributionSource $attribution_source = null;

    /**
     * @var AttributionSource|null
     */
    public ?AttributionSource $last_attribution_source = null;

    /**
     * @var string|null
     */
    public ?string $visitor_id = null;

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
        // Handle single DndSettingsSchema object
        if (isset($data['dndSettings']) && is_array($data['dndSettings'])) {
            $this->dnd_settings = new DndSettingsSchema($data['dndSettings']);
        } else {
            $this->dnd_settings = $data['dndSettings'] ?? null;
        }
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
        // Handle single AttributionSource object
        if (isset($data['attributionSource']) && is_array($data['attributionSource'])) {
            $this->attribution_source = new AttributionSource($data['attributionSource']);
        } else {
            $this->attribution_source = $data['attributionSource'] ?? null;
        }
        // Handle single AttributionSource object
        if (isset($data['lastAttributionSource']) && is_array($data['lastAttributionSource'])) {
            $this->last_attribution_source = new AttributionSource($data['lastAttributionSource']);
        } else {
            $this->last_attribution_source = $data['lastAttributionSource'] ?? null;
        }
        $this->visitor_id = $data['visitorId'] ?? null;
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
