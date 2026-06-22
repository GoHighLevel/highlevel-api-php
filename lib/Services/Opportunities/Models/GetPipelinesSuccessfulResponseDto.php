<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * GetPipelinesSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class GetPipelinesSuccessfulResponseDto
{
    /**
     * @var array&lt;PipelinesResponseSchema&gt;|null
     */
    public ?array $pipelines = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of PipelinesResponseSchema objects
        if (isset($data['pipelines']) && is_array($data['pipelines'])) {
            $this->pipelines = array_map(function($item) {
                return is_array($item) ? new PipelinesResponseSchema($item) : $item;
            }, $data['pipelines']);
        } else {
            $this->pipelines = $data['pipelines'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->pipelines !== null) {
            $result['pipelines'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->pipelines);
        }
        return $result;
    }
}
