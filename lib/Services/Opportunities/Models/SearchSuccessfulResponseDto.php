<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * SearchSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class SearchSuccessfulResponseDto
{
    /**
     * @var array&lt;SearchOpportunitiesResponseSchema&gt;|null
     */
    public ?array $opportunities = null;

    /**
     * @var mixed
     */
    public $meta;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $aggregations = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SearchOpportunitiesResponseSchema objects
        if (isset($data['opportunities']) && is_array($data['opportunities'])) {
            $this->opportunities = array_map(function($item) {
                return is_array($item) ? new SearchOpportunitiesResponseSchema($item) : $item;
            }, $data['opportunities']);
        } else {
            $this->opportunities = $data['opportunities'] ?? null;
        }
        $this->meta = $data['meta'] ?? null;
        $this->aggregations = $data['aggregations'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->opportunities !== null) {
            $result['opportunities'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->opportunities);
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->aggregations !== null) {
            $result['aggregations'] = $this->aggregations;
        }
        return $result;
    }
}
