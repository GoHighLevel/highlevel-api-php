<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * TranslationDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class TranslationDTO
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string|null
     */
    public ?string $language = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->language = $data['language'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->language !== null) {
            $result['language'] = $this->language;
        }
        return $result;
    }
}
