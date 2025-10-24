<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateContactSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateContactSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $date_updated = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var array&lt;CustomFieldSchema&gt;|null
     */
    public ?array $custom_fields = null;

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
    public ?string $first_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $full_name_lower_case = null;

    /**
     * @var string|null
     */
    public ?string $last_name = null;

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
    public ?string $email_lower_case = null;

    /**
     * @var bool|null
     */
    public ?bool $bounce_email = null;

    /**
     * @var bool|null
     */
    public ?bool $unsubscribe_email = null;

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
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var string|null
     */
    public ?string $date_of_birth = null;

    /**
     * @var float|null
     */
    public ?float $birth_month = null;

    /**
     * @var float|null
     */
    public ?float $birth_day = null;

    /**
     * @var string|null
     */
    public ?string $last_session_activity_at = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $offers = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $products = null;

    /**
     * @var string|null
     */
    public ?string $business_id = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

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
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->type = $data['type'] ?? null;
        // Handle array of CustomFieldSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
        }
        $this->location_id = $data['locationId'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->first_name_lower_case = $data['firstNameLowerCase'] ?? null;
        $this->full_name_lower_case = $data['fullNameLowerCase'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->last_name_lower_case = $data['lastNameLowerCase'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->email_lower_case = $data['emailLowerCase'] ?? null;
        $this->bounce_email = $data['bounceEmail'] ?? null;
        $this->unsubscribe_email = $data['unsubscribeEmail'] ?? null;
        $this->dnd = $data['dnd'] ?? null;
        // Handle single DndSettingsSchema object
        if (isset($data['dndSettings']) && is_array($data['dndSettings'])) {
            $this->dnd_settings = new DndSettingsSchema($data['dndSettings']);
        } else {
            $this->dnd_settings = $data['dndSettings'] ?? null;
        }
        $this->phone = $data['phone'] ?? null;
        $this->address1 = $data['address1'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
        $this->date_of_birth = $data['dateOfBirth'] ?? null;
        $this->birth_month = $data['birthMonth'] ?? null;
        $this->birth_day = $data['birthDay'] ?? null;
        $this->last_session_activity_at = $data['lastSessionActivityAt'] ?? null;
        $this->offers = $data['offers'] ?? null;
        $this->products = $data['products'] ?? null;
        $this->business_id = $data['businessId'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
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
