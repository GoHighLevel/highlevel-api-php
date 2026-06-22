<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * SocialMediaTagSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class SocialMediaTagSchema
{
    /**
     * @var string|null
     */
    public ?string $tag = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tag = $data['tag'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->id = $data['_id'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
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
