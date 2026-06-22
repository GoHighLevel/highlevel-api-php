<?php

namespace HighLevel\Services\Store\Models;

/**
 * ShippingZoneCountryStateDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ShippingZoneCountryStateDto
{
    /**
     * @var string
     */
    public string $code;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->code = $data['code'] ?? '';
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
        return $result;
    }
}
