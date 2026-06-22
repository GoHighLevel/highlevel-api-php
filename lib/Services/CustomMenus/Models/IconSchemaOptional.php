<?php

namespace HighLevel\Services\CustomMenus\Models;

/**
 * IconSchemaOptional model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class IconSchemaOptional
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $font_family = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->font_family = $data['fontFamily'] ?? null;
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
