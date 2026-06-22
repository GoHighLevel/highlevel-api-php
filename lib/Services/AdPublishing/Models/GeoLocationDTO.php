<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GeoLocationDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GeoLocationDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $urn;

    /**
     * @var string
     */
    public string $facet_urn;

    /**
     * @var string
     */
    public string $selection_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->urn = $data['urn'] ?? '';
        $this->facet_urn = $data['facetUrn'] ?? '';
        $this->selection_type = $data['selectionType'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->urn !== null) {
            $result['urn'] = $this->urn;
        }
        if ($this->facet_urn !== null) {
            $result['facetUrn'] = $this->facet_urn;
        }
        if ($this->selection_type !== null) {
            $result['selectionType'] = $this->selection_type;
        }
        return $result;
    }
}
