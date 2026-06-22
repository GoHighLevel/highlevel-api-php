<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * CustomFieldResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class CustomFieldResponseSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var mixed
     */
    public $field_value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->field_value = $data['fieldValue'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->field_value !== null) {
            $result['fieldValue'] = $this->field_value;
        }
        return $result;
    }
}
