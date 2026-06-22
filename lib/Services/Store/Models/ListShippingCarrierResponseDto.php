<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * ListShippingCarrierResponseDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ListShippingCarrierResponseDto
{
    /**
     * @var bool
     */
    public bool $status;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;ShippingCarrierSchema&gt;
     */
    public array $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? false;
        $this->message = $data['message'] ?? null;
        // Handle array of ShippingCarrierSchema objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new ShippingCarrierSchema($item) : $item;
            }, $data['data']);
        } else {
            $this->data = $data['data'] ?? [];
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->data !== null) {
            $result['data'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->data);
        }
        return $result;
    }
}
