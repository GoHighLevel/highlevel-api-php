<?php

namespace HighLevel\Services\Snapshots\Models;

/**
 * GetSnapshotsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class GetSnapshotsSuccessfulResponseDto
{
    /**
     * @var array&lt;SnapshotsSchema&gt;|null
     */
    public ?array $snapshots = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SnapshotsSchema objects
        if (isset($data['snapshots']) && is_array($data['snapshots'])) {
            $this->snapshots = array_map(function($item) {
                return is_array($item) ? new SnapshotsSchema($item) : $item;
            }, $data['snapshots']);
        } else {
            $this->snapshots = $data['snapshots'] ?? null;
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
        if ($this->snapshots !== null) {
            $result['snapshots'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->snapshots);
        }
        return $result;
    }
}
