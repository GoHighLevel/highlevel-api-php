<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Blogs\Models;

/**
 * AuthorResponseDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class AuthorResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

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
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->canonical_link = $data['canonicalLink'] ?? '';
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
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
        return $result;
    }
}
