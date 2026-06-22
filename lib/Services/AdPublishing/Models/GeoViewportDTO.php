<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GeoViewportDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GeoViewportDTO
{
    /**
     * @var mixed
     */
    public $northeast;

    /**
     * @var mixed
     */
    public $southwest;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->northeast = $data['northeast'] ?? null;
        $this->southwest = $data['southwest'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->northeast !== null) {
            $result['northeast'] = $this->northeast;
        }
        if ($this->southwest !== null) {
            $result['southwest'] = $this->southwest;
        }
        return $result;
    }
}
