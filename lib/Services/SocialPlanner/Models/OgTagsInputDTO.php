<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * OgTagsInputDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class OgTagsInputDTO
{
    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta_link = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta_image = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $og_title = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->meta_link = $data['metaLink'] ?? null;
        $this->meta_image = $data['metaImage'] ?? null;
        $this->og_title = $data['ogTitle'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->meta_link !== null) {
            $result['metaLink'] = $this->meta_link;
        }
        if ($this->meta_image !== null) {
            $result['metaImage'] = $this->meta_image;
        }
        if ($this->og_title !== null) {
            $result['ogTitle'] = $this->og_title;
        }
        return $result;
    }
}
