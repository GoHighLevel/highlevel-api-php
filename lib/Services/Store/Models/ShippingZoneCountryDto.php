<?php

namespace HighLevel\Services\Store\Models;

/**
 * ShippingZoneCountryDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ShippingZoneCountryDto
{
    /**
     * @var float
     */
    public float $code;

    /**
     * @var array&lt;ShippingZoneCountryStateDto&gt;|null
     */
    public ?array $states = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->code = $data['code'] ?? 0;
        // Handle array of ShippingZoneCountryStateDto objects
        if (isset($data['states']) && is_array($data['states'])) {
            $this->states = array_map(function($item) {
                return is_array($item) ? new ShippingZoneCountryStateDto($item) : $item;
            }, $data['states']);
        } else {
            $this->states = $data['states'] ?? null;
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
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->states !== null) {
            $result['states'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->states);
        }
        return $result;
    }
}
