<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * GetSaasLocationsResponseDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class GetSaasLocationsResponseDto
{
    /**
     * @var array&lt;SaasLocationDto&gt;
     */
    public array $locations;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $pagination;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SaasLocationDto objects
        if (isset($data['locations']) && is_array($data['locations'])) {
            $this->locations = array_map(function($item) {
                return is_array($item) ? new SaasLocationDto($item) : $item;
            }, $data['locations']);
        } else {
            $this->locations = $data['locations'] ?? [];
        }
        $this->pagination = $data['pagination'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->locations !== null) {
            $result['locations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->locations);
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }
}
