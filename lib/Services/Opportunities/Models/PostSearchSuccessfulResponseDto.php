<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * PostSearchSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class PostSearchSuccessfulResponseDto
{
    /**
     * @var array&lt;SearchOpportunitiesResponseSchema&gt;|null
     */
    public ?array $opportunities = null;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var array&lt;StageAggregationResponseDto&gt;|null
     */
    public ?array $stage_aggregations = null;

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
        $this->total = $data['total'] ?? 0;
        // Handle array of StageAggregationResponseDto objects
        if (isset($data['stageAggregations']) && is_array($data['stageAggregations'])) {
            $this->stage_aggregations = array_map(function($item) {
                return is_array($item) ? new StageAggregationResponseDto($item) : $item;
            }, $data['stageAggregations']);
        } else {
            $this->stage_aggregations = $data['stageAggregations'] ?? null;
        }
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
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->stage_aggregations !== null) {
            $result['stageAggregations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->stage_aggregations);
        }
        if ($this->aggregations !== null) {
            $result['aggregations'] = $this->aggregations;
        }
        return $result;
    }
}
