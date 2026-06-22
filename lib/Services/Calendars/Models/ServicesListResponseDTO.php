<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * ServicesListResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class ServicesListResponseDTO
{
    /**
     * @var array&lt;ServiceResponseDTO&gt;
     */
    public array $services;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ServiceResponseDTO objects
        if (isset($data['services']) && is_array($data['services'])) {
            $this->services = array_map(function($item) {
                return is_array($item) ? new ServiceResponseDTO($item) : $item;
            }, $data['services']);
        } else {
            $this->services = $data['services'] ?? [];
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
        if ($this->services !== null) {
            $result['services'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->services);
        }
        return $result;
    }
}
