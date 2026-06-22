<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * GetTemplatesSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetTemplatesSuccessfulResponseDto
{
    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $templates = null;

    /**
     * @var float|null
     */
    public ?float $total_count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->templates = $data['templates'] ?? null;
        $this->total_count = $data['totalCount'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->templates !== null) {
            $result['templates'] = $this->templates;
        }
        if ($this->total_count !== null) {
            $result['totalCount'] = $this->total_count;
        }
        return $result;
    }
}
