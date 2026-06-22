<?php

namespace HighLevel\Services\Products\Models;

/**
 * CollectionSEODto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class CollectionSEODto
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? null;
        $this->description = $data['description'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        return $result;
    }
}
