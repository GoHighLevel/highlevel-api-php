<?php

namespace HighLevel\Services\Snapshots\Models;

/**
 * CreateSnapshotShareLinkRequestDTO model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class CreateSnapshotShareLinkRequestDTO
{
    /**
     * @var string
     */
    public string $snapshot_id;

    /**
     * @var string
     */
    public string $share_type;

    /**
     * @var string|null
     */
    public ?string $relationship_number = null;

    /**
     * @var string|null
     */
    public ?string $share_location_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->snapshot_id = $data['snapshot_id'] ?? '';
        $this->share_type = $data['share_type'] ?? '';
        $this->relationship_number = $data['relationship_number'] ?? null;
        $this->share_location_id = $data['share_location_id'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->snapshot_id !== null) {
            $result['snapshot_id'] = $this->snapshot_id;
        }
        if ($this->share_type !== null) {
            $result['share_type'] = $this->share_type;
        }
        if ($this->relationship_number !== null) {
            $result['relationship_number'] = $this->relationship_number;
        }
        if ($this->share_location_id !== null) {
            $result['share_location_id'] = $this->share_location_id;
        }
        return $result;
    }
}
