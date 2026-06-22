<?php

namespace HighLevel\Services\CustomFields\Models;

/**
 * CustomFieldsResponseDTO model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class CustomFieldsResponseDTO
{
    /**
     * @var array&lt;ICustomField&gt;|null
     */
    public ?array $fields = null;

    /**
     * @var array&lt;ICustomField&gt;|null
     */
    public ?array $folders = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ICustomField objects
        if (isset($data['fields']) && is_array($data['fields'])) {
            $this->fields = array_map(function($item) {
                return is_array($item) ? new ICustomField($item) : $item;
            }, $data['fields']);
        } else {
            $this->fields = $data['fields'] ?? null;
        }
        // Handle array of ICustomField objects
        if (isset($data['folders']) && is_array($data['folders'])) {
            $this->folders = array_map(function($item) {
                return is_array($item) ? new ICustomField($item) : $item;
            }, $data['folders']);
        } else {
            $this->folders = $data['folders'] ?? null;
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
        if ($this->fields !== null) {
            $result['fields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->fields);
        }
        if ($this->folders !== null) {
            $result['folders'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->folders);
        }
        return $result;
    }
}
