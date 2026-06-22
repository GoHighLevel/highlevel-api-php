<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * PriceDimensionsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class PriceDimensionsDto
{
    /**
     * @var float
     */
    public float $height;

    /**
     * @var float
     */
    public float $width;

    /**
     * @var float
     */
    public float $length;

    /**
     * @var string
     */
    public string $unit;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->height = $data['height'] ?? 0;
        $this->width = $data['width'] ?? 0;
        $this->length = $data['length'] ?? 0;
        $this->unit = $data['unit'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        if ($this->length !== null) {
            $result['length'] = $this->length;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }
}
