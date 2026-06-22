<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * MissingAssets model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class MissingAssets
{
    /**
     * @var array&lt;string&gt;
     */
    public array $logos;

    /**
     * @var array&lt;string&gt;
     */
    public array $fonts;

    /**
     * @var array&lt;string&gt;
     */
    public array $colors;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->logos = $data['logos'] ?? [];
        $this->fonts = $data['fonts'] ?? [];
        $this->colors = $data['colors'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->logos !== null) {
            $result['logos'] = $this->logos;
        }
        if ($this->fonts !== null) {
            $result['fonts'] = $this->fonts;
        }
        if ($this->colors !== null) {
            $result['colors'] = $this->colors;
        }
        return $result;
    }
}
