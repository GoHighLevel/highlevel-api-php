<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleSegmentTargetDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleSegmentTargetDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->id = $data['id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }
}
