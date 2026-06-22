<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * BrandVoicePublicV1Dto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class BrandVoicePublicV1Dto
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
     * @var bool
     */
    public bool $is_default;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->is_default = $data['isDefault'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->is_default !== null) {
            $result['isDefault'] = $this->is_default;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
