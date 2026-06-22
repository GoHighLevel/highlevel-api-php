<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Courses\Models;

/**
 * PublicExporterPayload model
 * 
 * @package HighLevel\Services\Courses\Models
 */
class PublicExporterPayload
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var array&lt;ProductInterface&gt;
     */
    public array $products;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->user_id = $data['userId'] ?? null;
        // Handle array of ProductInterface objects
        if (isset($data['products']) && is_array($data['products'])) {
            $this->products = array_map(function($item) {
                return is_array($item) ? new ProductInterface($item) : $item;
            }, $data['products']);
        } else {
            $this->products = $data['products'] ?? [];
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->products !== null) {
            $result['products'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->products);
        }
        return $result;
    }
}
