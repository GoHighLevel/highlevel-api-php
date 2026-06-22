<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Snapshots\Models;

/**
 * GetSnapshotPushStatusSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class GetSnapshotPushStatusSuccessfulResponseDTO
{
    /**
     * @var array&lt;SnapshotStatusSchema&gt;|null
     */
    public ?array $data = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SnapshotStatusSchema objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new SnapshotStatusSchema($item) : $item;
            }, $data['data']);
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
            $result['data'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->data);
        }
        return $result;
    }
}
