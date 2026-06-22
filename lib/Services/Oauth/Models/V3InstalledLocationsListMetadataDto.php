<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Oauth\Models;

/**
 * V3InstalledLocationsListMetadataDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class V3InstalledLocationsListMetadataDto
{
    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $filter_applied = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $sort_applied = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->filter_applied = $data['filterApplied'] ?? null;
        $this->sort_applied = $data['sortApplied'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->filter_applied !== null) {
            $result['filterApplied'] = $this->filter_applied;
        }
        if ($this->sort_applied !== null) {
            $result['sortApplied'] = $this->sort_applied;
        }
        return $result;
    }
}
