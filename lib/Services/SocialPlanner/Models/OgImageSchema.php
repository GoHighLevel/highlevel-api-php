<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * OgImageSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class OgImageSchema
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var float|null
     */
    public ?float $width = null;

    /**
     * @var float|null
     */
    public ?float $height = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? null;
        $this->width = $data['width'] ?? null;
        $this->height = $data['height'] ?? null;
        $this->type = $data['type'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
