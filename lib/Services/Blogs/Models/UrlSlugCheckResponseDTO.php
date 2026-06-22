<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Blogs\Models;

/**
 * UrlSlugCheckResponseDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class UrlSlugCheckResponseDTO
{
    /**
     * @var bool
     */
    public bool $exists;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->exists = $data['exists'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->exists !== null) {
            $result['exists'] = $this->exists;
        }
        return $result;
    }
}
