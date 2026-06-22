<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Snapshots\Models;

/**
 * SnapshotStatusSchemaWithAssets model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class SnapshotStatusSchemaWithAssets
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $completed = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $pending = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->completed = $data['completed'] ?? null;
        $this->pending = $data['pending'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->completed !== null) {
            $result['completed'] = $this->completed;
        }
        if ($this->pending !== null) {
            $result['pending'] = $this->pending;
        }
        return $result;
    }
}
