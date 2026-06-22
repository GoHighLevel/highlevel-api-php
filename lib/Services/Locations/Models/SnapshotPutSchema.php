<?php

namespace HighLevel\Services\Locations\Models;

/**
 * SnapshotPutSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class SnapshotPutSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool|null
     */
    public ?bool $override = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->override = $data['override'] ?? null;
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
        if ($this->override !== null) {
            $result['override'] = $this->override;
        }
        return $result;
    }
}
