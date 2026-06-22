<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleDemographicTargetDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleDemographicTargetDTO
{
    /**
     * @var string
     */
    public string $enum;

    /**
     * @var bool
     */
    public bool $negative;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enum = $data['enum'] ?? '';
        $this->negative = $data['negative'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enum !== null) {
            $result['enum'] = $this->enum;
        }
        if ($this->negative !== null) {
            $result['negative'] = $this->negative;
        }
        return $result;
    }
}
