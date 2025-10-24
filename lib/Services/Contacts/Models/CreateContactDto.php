<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateContactDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateContactDto
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
     * @var DndSettingsSchema|null
     */
    public ?DndSettingsSchema $dnd_settings = null;

    /**
     * @var InboundDndSettingsSchema|null
     */
    public ?InboundDndSettingsSchema $inbound_dnd_settings = null;

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
        // Handle single DndSettingsSchema object
        if (isset($data['dndSettings']) && is_array($data['dndSettings'])) {
            $this->dnd_settings = new DndSettingsSchema($data['dndSettings']);
        } else {
            $this->dnd_settings = $data['dndSettings'] ?? null;
        }
        // Handle single InboundDndSettingsSchema object
        if (isset($data['inboundDndSettings']) && is_array($data['inboundDndSettings'])) {
            $this->inbound_dnd_settings = new InboundDndSettingsSchema($data['inboundDndSettings']);
        } else {
            $this->inbound_dnd_settings = $data['inboundDndSettings'] ?? null;
        }
        $this->tags = $data['tags'] ?? null;
        $this->custom_fields = $data['customFields'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
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
