<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * GetKnowledgeBaseByIdDataDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class GetKnowledgeBaseByIdDataDTO
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
    public string $name_lower_case;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var mixed
     */
    public $kb_metadata;

    /**
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->name_lower_case = $data['nameLowerCase'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->kb_metadata = $data['kbMetadata'] ?? null;
        $this->is_default = $data['isDefault'] ?? null;
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
        if ($this->name_lower_case !== null) {
            $result['nameLowerCase'] = $this->name_lower_case;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
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
        if ($this->kb_metadata !== null) {
            $result['kbMetadata'] = $this->kb_metadata;
        }
        if ($this->is_default !== null) {
            $result['isDefault'] = $this->is_default;
        }
        return $result;
    }
}
