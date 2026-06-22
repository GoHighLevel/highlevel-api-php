<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * CustomObjectResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CustomObjectResponseDTO
{
    /**
     * @var ICustomObjectSchema|null
     */
    public ?ICustomObjectSchema $object = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single ICustomObjectSchema object
        if (isset($data['object']) && is_array($data['object'])) {
            $this->object = new ICustomObjectSchema($data['object']);
        } else {
            $this->object = $data['object'] ?? null;
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
        if ($this->object !== null) {
            $result['object'] = is_object($this->object) && method_exists($this->object, 'toArray') 
                ? $this->object->toArray() 
                : $this->object;
        }
        return $result;
    }
}
