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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_fields);
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->business_id !== null) {
            $result['businessId'] = $this->business_id;
        }
        if ($this->attributions !== null) {
            $result['attributions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attributions);
        }
        if ($this->followers !== null) {
            $result['followers'] = $this->followers;
        }
        return $result;
    }
}
