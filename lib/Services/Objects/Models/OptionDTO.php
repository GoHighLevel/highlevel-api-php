<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * OptionDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class OptionDTO
{
    /**
     * @var string
     */
    public string $key;

    /**
     * @var string
     */
    public string $label;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->key = $data['key'] ?? '';
        $this->label = $data['label'] ?? '';
        $this->url = $data['url'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }
}
