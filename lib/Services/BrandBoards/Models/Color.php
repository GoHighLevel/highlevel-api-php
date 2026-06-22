<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * Color model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class Color
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $hexa;

    /**
     * @var string
     */
    public string $rgba;

    /**
     * @var string
     */
    public string $hex;

    /**
     * @var string
     */
    public string $rgb;

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
        $this->hexa = $data['hexa'] ?? '';
        $this->rgba = $data['rgba'] ?? '';
        $this->hex = $data['hex'] ?? '';
        $this->rgb = $data['rgb'] ?? '';
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
        if ($this->hexa !== null) {
            $result['hexa'] = $this->hexa;
        }
        if ($this->rgba !== null) {
            $result['rgba'] = $this->rgba;
        }
        if ($this->hex !== null) {
            $result['hex'] = $this->hex;
        }
        if ($this->rgb !== null) {
            $result['rgb'] = $this->rgb;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        return $result;
    }
}
