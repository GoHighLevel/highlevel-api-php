<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertConversionPixelDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class UpsertConversionPixelDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $conversion_pixel_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $ig_user_id = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->conversion_pixel_id = $data['conversionPixelId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->ig_user_id = $data['igUserId'] ?? null;
        $this->type = $data['type'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->conversion_pixel_id !== null) {
            $result['conversionPixelId'] = $this->conversion_pixel_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->ig_user_id !== null) {
            $result['igUserId'] = $this->ig_user_id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
