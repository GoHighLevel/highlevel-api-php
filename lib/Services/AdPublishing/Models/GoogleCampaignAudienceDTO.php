<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleCampaignAudienceDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
    public $target_interests;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GoogleGeoLocationDTO objects
        if (isset($data['geoLocations']) && is_array($data['geoLocations'])) {
            $this->geo_locations = array_map(function($item) {
                return is_array($item) ? new GoogleGeoLocationDTO($item) : $item;
            }, $data['geoLocations']);
        } else {
            $this->geo_locations = $data['geoLocations'] ?? null;
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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->geo_locations !== null) {
            $result['geoLocations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->geo_locations);
        }
        if ($this->locales !== null) {
            $result['locales'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->locales);
        }
        if ($this->gender !== null) {
            $result['gender'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->gender);
        }
        if ($this->age_range !== null) {
            $result['ageRange'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->age_range);
        }
        if ($this->segments !== null) {
            $result['segments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->segments);
        }
        if ($this->target_interests !== null) {
            $result['targetInterests'] = $this->target_interests;
        }
        return $result;
    }
}
