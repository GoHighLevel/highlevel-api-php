<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertAssetsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class UpsertAssetsDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var mixed
     */
    public $payload;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->payload = $data['payload'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->payload !== null) {
            $result['payload'] = $this->payload;
        }
        return $result;
    }
}
