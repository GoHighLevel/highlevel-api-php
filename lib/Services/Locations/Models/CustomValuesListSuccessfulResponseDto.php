<?php

namespace HighLevel\Services\Locations\Models;

/**
 * CustomValuesListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomValuesListSuccessfulResponseDto
{
    /**
     * @var array&lt;CustomValueSchema&gt;|null
     */
    public ?array $custom_values = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CustomValueSchema objects
        if (isset($data['customValues']) && is_array($data['customValues'])) {
            $this->custom_values = array_map(function($item) {
                return is_array($item) ? new CustomValueSchema($item) : $item;
            }, $data['customValues']);
        } else {
            $this->custom_values = $data['customValues'] ?? null;
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
        if ($this->custom_values !== null) {
            $result['customValues'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_values);
        }
        return $result;
    }
}
