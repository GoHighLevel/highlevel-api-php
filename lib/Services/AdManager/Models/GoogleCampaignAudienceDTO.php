<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleCampaignAudienceDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class GoogleCampaignAudienceDTO
{
    /**
     * @var array&lt;GoogleGeoLocationDTO&gt;|null
     */
    public ?array $geo_locations = null;

    /**
     * @var array&lt;GoogleLocaleDTO&gt;|null
     */
    public ?array $locales = null;

    /**
     * @var array&lt;GoogleDemographicTargetDTO&gt;|null
     */
    public ?array $gender = null;

    /**
     * @var array&lt;GoogleDemographicTargetDTO&gt;|null
     */
    public ?array $age_range = null;

    /**
     * @var array&lt;GoogleSegmentTargetDTO&gt;|null
     */
    public ?array $segments = null;

    /**
     * @var mixed
     */
    public mixed $target_interests;

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
        // Handle array of GoogleGeoLocationDTO objects
        if (isset($data['geo_locations']) && is_array($data['geo_locations'])) {
            $this->geo_locations = array_map(function($item) {
                return is_array($item) ? new GoogleGeoLocationDTO($item) : $item;
            }, $data['geo_locations']);
        } else {
            $this->geo_locations = $data['geo_locations'] ?? null;
        }
        // Handle array of GoogleLocaleDTO objects
        if (isset($data['locales']) && is_array($data['locales'])) {
            $this->locales = array_map(function($item) {
                return is_array($item) ? new GoogleLocaleDTO($item) : $item;
            }, $data['locales']);
        } else {
            $this->locales = $data['locales'] ?? null;
        }
        // Handle array of GoogleDemographicTargetDTO objects
        if (isset($data['gender']) && is_array($data['gender'])) {
            $this->gender = array_map(function($item) {
                return is_array($item) ? new GoogleDemographicTargetDTO($item) : $item;
            }, $data['gender']);
        } else {
            $this->gender = $data['gender'] ?? null;
        }
        // Handle array of GoogleDemographicTargetDTO objects
        if (isset($data['ageRange']) && is_array($data['ageRange'])) {
            $this->age_range = array_map(function($item) {
                return is_array($item) ? new GoogleDemographicTargetDTO($item) : $item;
            }, $data['ageRange']);
        } else {
            $this->age_range = $data['ageRange'] ?? null;
        }
        // Handle array of GoogleSegmentTargetDTO objects
        if (isset($data['segments']) && is_array($data['segments'])) {
            $this->segments = array_map(function($item) {
                return is_array($item) ? new GoogleSegmentTargetDTO($item) : $item;
            }, $data['segments']);
        } else {
            $this->segments = $data['segments'] ?? null;
        }
        $this->target_interests = $data['targetInterests'] ?? null;
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
