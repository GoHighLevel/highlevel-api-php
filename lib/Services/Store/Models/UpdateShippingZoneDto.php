<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * UpdateShippingZoneDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class UpdateShippingZoneDto
{
    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var string|null
     */
    public ?string $alt_type = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var array&lt;ShippingZoneCountryDto&gt;|null
     */
    public ?array $countries = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? null;
        $this->alt_type = $data['altType'] ?? null;
        $this->name = $data['name'] ?? null;
        // Handle array of ShippingZoneCountryDto objects
        if (isset($data['countries']) && is_array($data['countries'])) {
            $this->countries = array_map(function($item) {
                return is_array($item) ? new ShippingZoneCountryDto($item) : $item;
            }, $data['countries']);
        } else {
            $this->countries = $data['countries'] ?? null;
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
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->countries !== null) {
            $result['countries'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->countries);
        }
        return $result;
    }
}
