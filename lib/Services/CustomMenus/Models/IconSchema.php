<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\CustomMenus\Models;

/**
 * IconSchema model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class IconSchema
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $font_family;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->font_family = $data['fontFamily'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->font_family !== null) {
            $result['fontFamily'] = $this->font_family;
        }
        return $result;
    }
}
