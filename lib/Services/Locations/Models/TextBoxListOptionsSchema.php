<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * textBoxListOptionsSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class TextBoxListOptionsSchema
{
    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @var string|null
     */
    public ?string $prefill_value = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->label = $data['label'] ?? null;
        $this->prefill_value = $data['prefillValue'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->prefill_value !== null) {
            $result['prefillValue'] = $this->prefill_value;
        }
        return $result;
    }
}
