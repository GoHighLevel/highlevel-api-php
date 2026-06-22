<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * ShippingZoneSchema model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ShippingZoneSchema
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var array&lt;ShippingZoneCountryDto&gt;
     */
    public array $countries;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;ShippingRateSchema&gt;|null
     */
    public ?array $shipping_rates = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        // Handle array of ShippingZoneCountryDto objects
        if (isset($data['countries']) && is_array($data['countries'])) {
            $this->countries = array_map(function($item) {
                return is_array($item) ? new ShippingZoneCountryDto($item) : $item;
            }, $data['countries']);
        } else {
            $this->countries = $data['countries'] ?? [];
        }
        $this->id = $data['_id'] ?? '';
        // Handle array of ShippingRateSchema objects
        if (isset($data['shippingRates']) && is_array($data['shippingRates'])) {
            $this->shipping_rates = array_map(function($item) {
                return is_array($item) ? new ShippingRateSchema($item) : $item;
            }, $data['shippingRates']);
        } else {
            $this->shipping_rates = $data['shippingRates'] ?? null;
        }
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->shipping_rates !== null) {
            $result['shippingRates'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->shipping_rates);
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
