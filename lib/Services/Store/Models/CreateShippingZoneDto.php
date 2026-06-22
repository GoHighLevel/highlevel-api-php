<?php

namespace HighLevel\Services\Store\Models;

/**
 * CreateShippingZoneDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class CreateShippingZoneDto
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
