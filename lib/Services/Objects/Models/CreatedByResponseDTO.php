<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * CreatedByResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CreatedByResponseDTO
{
    /**
     * @var string
     */
    public string $channel;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $source;

    /**
     * @var string
     */
    public string $source_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->channel = $data['channel'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->source = $data['source'] ?? '';
        $this->source_id = $data['sourceId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->channel !== null) {
            $result['channel'] = $this->channel;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        return $result;
    }
}
