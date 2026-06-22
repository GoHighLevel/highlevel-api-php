<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FacebookPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FacebookPostSchema
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $text_format_preset_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->text_format_preset_id = $data['textFormatPresetId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->text_format_preset_id !== null) {
            $result['textFormatPresetId'] = $this->text_format_preset_id;
        }
        return $result;
    }
}
