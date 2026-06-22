<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * FulfillmentSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class FulfillmentSchema
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var array&lt;FulfillmentTracking&gt;
     */
    public array $trackings;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;FulfilledItem&gt;
     */
    public array $items;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        // Handle array of FulfillmentTracking objects
        if (isset($data['trackings']) && is_array($data['trackings'])) {
            $this->trackings = array_map(function($item) {
                return is_array($item) ? new FulfillmentTracking($item) : $item;
            }, $data['trackings']);
        } else {
            $this->trackings = $data['trackings'] ?? [];
        }
        $this->id = $data['_id'] ?? '';
        // Handle array of FulfilledItem objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new FulfilledItem($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? [];
        }
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->trackings !== null) {
            $result['trackings'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->trackings);
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
