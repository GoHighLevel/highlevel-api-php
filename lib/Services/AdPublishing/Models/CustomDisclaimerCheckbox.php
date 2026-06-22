<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CustomDisclaimerCheckbox model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CustomDisclaimerCheckbox
{
    /**
     * @var bool
     */
    public bool $is_required;

    /**
     * @var string
     */
    public string $text;

    /**
     * @var string
     */
    public string $key;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->is_required = $data['isRequired'] ?? false;
        $this->text = $data['text'] ?? '';
        $this->key = $data['key'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->is_required !== null) {
            $result['isRequired'] = $this->is_required;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        return $result;
    }
}
