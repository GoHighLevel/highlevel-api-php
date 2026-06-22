<?php

namespace HighLevel\Services\Snapshots\Models;

/**
 * GetLatestSnapshotPushStatusSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class GetLatestSnapshotPushStatusSuccessfulResponseDTO
{
    /**
     * @var SnapshotStatusSchemaWithAssets|null
     */
    public ?SnapshotStatusSchemaWithAssets $data = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single SnapshotStatusSchemaWithAssets object
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = new SnapshotStatusSchemaWithAssets($data['data']);
        } else {
            $this->data = $data['data'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = is_object($this->data) && method_exists($this->data, 'toArray') 
                ? $this->data->toArray() 
                : $this->data;
        }
        return $result;
    }
}
