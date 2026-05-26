<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * FacebookAudienceDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
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
    public mixed $placements;

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
        // Handle array of AudienceLocationDTO objects
        if (isset($data['geo_locations']) && is_array($data['geo_locations'])) {
            $this->geo_locations = array_map(function($item) {
                return is_array($item) ? new AudienceLocationDTO($item) : $item;
            }, $data['geo_locations']);
        } else {
            $this->geo_locations = $data['geo_locations'] ?? [];
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
        $this->age_min = $data['age_min'] ?? null;
        $this->age_max = $data['age_max'] ?? null;
        $this->genders = $data['genders'] ?? null;
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
