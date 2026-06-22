<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * Font model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class Font
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $font;

    /**
     * @var string
     */
    public string $fallback;

    /**
     * @var string
     */
    public string $label;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->font = $data['font'] ?? '';
        $this->fallback = $data['fallback'] ?? '';
        $this->label = $data['label'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->font !== null) {
            $result['font'] = $this->font;
        }
        if ($this->fallback !== null) {
            $result['fallback'] = $this->fallback;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        return $result;
    }
}
