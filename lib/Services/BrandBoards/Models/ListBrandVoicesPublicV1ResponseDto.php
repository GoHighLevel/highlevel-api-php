<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * ListBrandVoicesPublicV1ResponseDto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class ListBrandVoicesPublicV1ResponseDto
{
    /**
     * @var array&lt;BrandVoicePublicV1Dto&gt;
     */
    public array $items;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BrandVoicePublicV1Dto objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new BrandVoicePublicV1Dto($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
        $this->trace_id = $data['traceId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
