<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CreateKnowledgeBaseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CreateKnowledgeBaseDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
