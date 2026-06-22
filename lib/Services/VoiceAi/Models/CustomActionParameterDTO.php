<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CustomActionParameterDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CustomActionParameterDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $example = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->example = $data['example'] ?? null;
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->example !== null) {
            $result['example'] = $this->example;
        }
        return $result;
    }
}
