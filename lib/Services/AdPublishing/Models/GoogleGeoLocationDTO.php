<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleGeoLocationDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
    public $geometry;

    /**
     * @var array&lt;GeoAddressComponentDTO&gt;|null
     */
    public ?array $address_components = null;

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
        $this->country_name = $data['countryName'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->radius = $data['radius'] ?? null;
        $this->radius_unit = $data['radiusUnit'] ?? null;
        $this->selection_type = $data['selectionType'] ?? null;
        $this->resource_name = $data['resourceName'] ?? null;
        $this->place_id = $data['placeId'] ?? null;
        $this->formatted_address = $data['formattedAddress'] ?? null;
        $this->geometry = $data['geometry'] ?? null;
        // Handle array of GeoAddressComponentDTO objects
        if (isset($data['addressComponents']) && is_array($data['addressComponents'])) {
            $this->address_components = array_map(function($item) {
                return is_array($item) ? new GeoAddressComponentDTO($item) : $item;
            }, $data['addressComponents']);
        } else {
            $this->address_components = $data['addressComponents'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->country_name !== null) {
            $result['countryName'] = $this->country_name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->radius !== null) {
            $result['radius'] = $this->radius;
        }
        if ($this->radius_unit !== null) {
            $result['radiusUnit'] = $this->radius_unit;
        }
        if ($this->selection_type !== null) {
            $result['selectionType'] = $this->selection_type;
        }
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        if ($this->place_id !== null) {
            $result['placeId'] = $this->place_id;
        }
        if ($this->formatted_address !== null) {
            $result['formattedAddress'] = $this->formatted_address;
        }
        if ($this->geometry !== null) {
            $result['geometry'] = $this->geometry;
        }
        if ($this->address_components !== null) {
            $result['addressComponents'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->address_components);
        }
        return $result;
    }
}
