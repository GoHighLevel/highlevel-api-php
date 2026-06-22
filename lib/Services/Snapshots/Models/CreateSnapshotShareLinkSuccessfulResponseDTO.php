<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Snapshots\Models;

/**
 * CreateSnapshotShareLinkSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\Snapshots\Models
 */
class CreateSnapshotShareLinkSuccessfulResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $share_link = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->share_link = $data['shareLink'] ?? null;
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
        if ($this->share_link !== null) {
            $result['shareLink'] = $this->share_link;
        }
        return $result;
    }
}
