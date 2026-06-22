<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CustomActionHeaderDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CustomActionHeaderDTO
{
    /**
     * @var string
     */
    public string $key;

    /**
     * @var string
     */
    public string $value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->key = $data['key'] ?? '';
        $this->value = $data['value'] ?? '';
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
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }
}
