<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * CategoryResponseDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class CategoryResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string
     */
    public string $canonical_link;

    /**
     * @var string
     */
    public string $url_slug;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->label = $data['label'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->canonical_link = $data['canonicalLink'] ?? '';
        $this->url_slug = $data['urlSlug'] ?? '';
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
            $result['_id'] = $this->id;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->canonical_link !== null) {
            $result['canonicalLink'] = $this->canonical_link;
        }
        if ($this->url_slug !== null) {
            $result['urlSlug'] = $this->url_slug;
        }
        return $result;
    }
}
