<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * FacebookAudienceDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class FacebookAudienceDTO
{
    /**
     * @var array&lt;AudienceLocationDTO&gt;
     */
    public array $geo_locations;

    /**
     * @var array&lt;AudienceLocaleDTO&gt;|null
     */
    public ?array $locales = null;

    /**
     * @var mixed
     */
    public $placements;

    /**
     * @var string|null
     */
    public ?string $placement_type = null;

    /**
     * @var array&lt;AudienceCustomAudienceItemDTO&gt;|null
     */
    public ?array $lookalike = null;

    /**
     * @var array&lt;AudienceCustomAudienceItemDTO&gt;|null
     */
    public ?array $retargeting = null;

    /**
     * @var array&lt;AudienceInterestDTO&gt;|null
     */
    public ?array $interests = null;

    /**
     * @var float|null
     */
    public ?float $age_min = null;

    /**
     * @var float|null
     */
    public ?float $age_max = null;

    /**
     * @var array&lt;float&gt;|null
     */
    public ?array $genders = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of AudienceLocationDTO objects
        if (isset($data['geoLocations']) && is_array($data['geoLocations'])) {
            $this->geo_locations = array_map(function($item) {
                return is_array($item) ? new AudienceLocationDTO($item) : $item;
            }, $data['geoLocations']);
        } else {
            $this->geo_locations = $data['geoLocations'] ?? [];
        }
        // Handle array of AudienceLocaleDTO objects
        if (isset($data['locales']) && is_array($data['locales'])) {
            $this->locales = array_map(function($item) {
                return is_array($item) ? new AudienceLocaleDTO($item) : $item;
            }, $data['locales']);
        } else {
            $this->locales = $data['locales'] ?? null;
        }
        $this->placements = $data['placements'] ?? null;
        $this->placement_type = $data['placementType'] ?? null;
        // Handle array of AudienceCustomAudienceItemDTO objects
        if (isset($data['lookalike']) && is_array($data['lookalike'])) {
            $this->lookalike = array_map(function($item) {
                return is_array($item) ? new AudienceCustomAudienceItemDTO($item) : $item;
            }, $data['lookalike']);
        } else {
            $this->lookalike = $data['lookalike'] ?? null;
        }
        // Handle array of AudienceCustomAudienceItemDTO objects
        if (isset($data['retargeting']) && is_array($data['retargeting'])) {
            $this->retargeting = array_map(function($item) {
                return is_array($item) ? new AudienceCustomAudienceItemDTO($item) : $item;
            }, $data['retargeting']);
        } else {
            $this->retargeting = $data['retargeting'] ?? null;
        }
        // Handle array of AudienceInterestDTO objects
        if (isset($data['interests']) && is_array($data['interests'])) {
            $this->interests = array_map(function($item) {
                return is_array($item) ? new AudienceInterestDTO($item) : $item;
            }, $data['interests']);
        } else {
            $this->interests = $data['interests'] ?? null;
        }
        $this->age_min = $data['ageMin'] ?? null;
        $this->age_max = $data['ageMax'] ?? null;
        $this->genders = $data['genders'] ?? null;
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
        if ($this->placements !== null) {
            $result['placements'] = $this->placements;
        }
        if ($this->placement_type !== null) {
            $result['placementType'] = $this->placement_type;
        }
        if ($this->lookalike !== null) {
            $result['lookalike'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->lookalike);
        }
        if ($this->retargeting !== null) {
            $result['retargeting'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->retargeting);
        }
        if ($this->interests !== null) {
            $result['interests'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->interests);
        }
        if ($this->age_min !== null) {
            $result['ageMin'] = $this->age_min;
        }
        if ($this->age_max !== null) {
            $result['ageMax'] = $this->age_max;
        }
        if ($this->genders !== null) {
            $result['genders'] = $this->genders;
        }
        return $result;
    }
}
