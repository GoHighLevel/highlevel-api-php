<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateAddTagSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateAddTagSuccessfulResponseDto
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tags = $data['tags'] ?? null;
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
