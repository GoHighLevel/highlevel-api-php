<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * MetaData model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class MetaData
{
    /**
     * @var string|null
     */
    public ?string $updated_by = null;

    /**
     * @var string|null
     */
    public ?string $last_action = null;

    /**
     * @var string|null
     */
    public ?string $source_id = null;

    /**
     * @var string|null
     */
    public ?string $source_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->updated_by = $data['updatedBy'] ?? null;
        $this->last_action = $data['lastAction'] ?? null;
        $this->source_id = $data['sourceId'] ?? null;
        $this->source_type = $data['sourceType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
        }
        if ($this->last_action !== null) {
            $result['lastAction'] = $this->last_action;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->source_type !== null) {
            $result['sourceType'] = $this->source_type;
        }
        return $result;
    }
}
