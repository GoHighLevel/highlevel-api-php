<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * SingleSelectField model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class SingleSelectField
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $key = null;

    /**
     * @var string|null
     */
    public ?string $field_value = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->key = $data['key'] ?? null;
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
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->field_value !== null) {
            $result['fieldValue'] = $this->field_value;
        }
        return $result;
    }
}
