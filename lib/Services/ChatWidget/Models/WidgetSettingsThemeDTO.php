<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * WidgetSettingsThemeDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class WidgetSettingsThemeDTO
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var mixed
     */
    public $colors;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->colors = $data['colors'] ?? null;
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
        if ($this->colors !== null) {
            $result['colors'] = $this->colors;
        }
        return $result;
    }
}
