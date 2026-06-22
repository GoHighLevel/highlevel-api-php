<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * TagsDTO model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class TagsDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $tags;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tags = $data['tags'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        return $result;
    }
}
