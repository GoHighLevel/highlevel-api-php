<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * WidgetSettingsCustomizationSizeDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class WidgetSettingsCustomizationSizeDTO
{
    /**
     * @var float|null
     */
    public ?float $width = null;

    /**
     * @var float|null
     */
    public ?float $height = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->width = $data['width'] ?? null;
        $this->height = $data['height'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        return $result;
    }
}
