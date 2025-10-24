<?php

namespace HighLevel\Services\Locations\Models;

/**
 * SettingsSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class SettingsSchema
{
    /**
     * @var bool|null
     */
    public ?bool $allow_duplicate_contact = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_duplicate_opportunity = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_facebook_name_merge = null;

    /**
     * @var bool|null
     */
    public ?bool $disable_contact_timezone = null;

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
        $this->allow_duplicate_contact = $data['allowDuplicateContact'] ?? null;
        $this->allow_duplicate_opportunity = $data['allowDuplicateOpportunity'] ?? null;
        $this->allow_facebook_name_merge = $data['allowFacebookNameMerge'] ?? null;
        $this->disable_contact_timezone = $data['disableContactTimezone'] ?? null;
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
