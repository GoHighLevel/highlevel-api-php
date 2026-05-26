<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * GoogleGeoLocationDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class GoogleGeoLocationDTO
{
    /**
     * @var string|null
     */
    public ?string $key = null;

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
    public ?string $country_name = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var float|null
     */
    public ?float $radius = null;

    /**
     * @var string|null
     */
    public ?string $radius_unit = null;

    /**
     * @var string|null
     */
    public ?string $selection_type = null;

    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * @var string|null
     */
    public ?string $place_id = null;

    /**
     * @var string|null
     */
    public ?string $formatted_address = null;

    /**
     * @var mixed
     */
    public mixed $geometry;

    /**
     * @var array&lt;GeoAddressComponentDTO&gt;|null
     */
    public ?array $address_components = null;

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
        $this->key = $data['key'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->country_name = $data['country_name'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->radius = $data['radius'] ?? null;
        $this->radius_unit = $data['radiusUnit'] ?? null;
        $this->selection_type = $data['selectionType'] ?? null;
        $this->resource_name = $data['resourceName'] ?? null;
        $this->place_id = $data['place_id'] ?? null;
        $this->formatted_address = $data['formatted_address'] ?? null;
        $this->geometry = $data['geometry'] ?? null;
        // Handle array of GeoAddressComponentDTO objects
        if (isset($data['address_components']) && is_array($data['address_components'])) {
            $this->address_components = array_map(function($item) {
                return is_array($item) ? new GeoAddressComponentDTO($item) : $item;
            }, $data['address_components']);
        } else {
            $this->address_components = $data['address_components'] ?? null;
        }
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
