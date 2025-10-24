<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * ContactsSearchSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class ContactsSearchSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

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
    public ?string $business_id = null;

    /**
     * @var array&lt;AttributionSource&gt;|null
     */
    public ?array $attributions = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $followers = null;

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
        $this->location_id = $data['locationId'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        // Handle array of CustomFieldSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
        }
        $this->tags = $data['tags'] ?? null;
        $this->business_id = $data['businessId'] ?? null;
        // Handle array of AttributionSource objects
        if (isset($data['attributions']) && is_array($data['attributions'])) {
            $this->attributions = array_map(function($item) {
                return is_array($item) ? new AttributionSource($item) : $item;
            }, $data['attributions']);
        } else {
            $this->attributions = $data['attributions'] ?? null;
        }
        $this->followers = $data['followers'] ?? null;
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
