<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * OgTagsSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class OgTagsSchema
{
    /**
     * @var string|null
     */
    public ?string $meta_image = null;

    /**
     * @var string|null
     */
    public ?string $meta_link = null;

    /**
     * @var string|null
     */
    public ?string $og_title = null;

    /**
     * @var string|null
     */
    public ?string $og_description = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->meta_image = $data['metaImage'] ?? null;
        $this->meta_link = $data['metaLink'] ?? null;
        $this->og_title = $data['ogTitle'] ?? null;
        $this->og_description = $data['ogDescription'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->meta_image !== null) {
            $result['metaImage'] = $this->meta_image;
        }
        if ($this->meta_link !== null) {
            $result['metaLink'] = $this->meta_link;
        }
        if ($this->og_title !== null) {
            $result['ogTitle'] = $this->og_title;
        }
        if ($this->og_description !== null) {
            $result['ogDescription'] = $this->og_description;
        }
        return $result;
    }
}
