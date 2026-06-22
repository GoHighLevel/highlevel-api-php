<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Snapshots\Models;

/**
 * SnapshotStatusSchema model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class SnapshotStatusSchema
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
     * @var string|null
     */
    public ?string $date_added = null;

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
        $this->date_added = $data['dateAdded'] ?? null;
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
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        return $result;
    }
}
