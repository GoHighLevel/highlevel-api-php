<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * WidgetSettingsCustomizationDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class WidgetSettingsCustomizationDTO
{
    /**
     * @var string|null
     */
    public ?string $position = null;

    /**
     * @var mixed
     */
    public $sizes;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->position = $data['position'] ?? null;
        $this->sizes = $data['sizes'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->position !== null) {
            $result['position'] = $this->position;
        }
        if ($this->sizes !== null) {
            $result['sizes'] = $this->sizes;
        }
        return $result;
    }
}
