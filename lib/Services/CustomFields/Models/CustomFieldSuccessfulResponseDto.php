<?php

namespace HighLevel\Services\CustomFields\Models;

/**
 * CustomFieldSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class CustomFieldSuccessfulResponseDto
{
    /**
     * @var ICustomField|null
     */
    public ?ICustomField $field = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single ICustomField object
        if (isset($data['field']) && is_array($data['field'])) {
            $this->field = new ICustomField($data['field']);
        } else {
            $this->field = $data['field'] ?? null;
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
        if ($this->field !== null) {
            $result['field'] = is_object($this->field) && method_exists($this->field, 'toArray') 
                ? $this->field->toArray() 
                : $this->field;
        }
        return $result;
    }
}
