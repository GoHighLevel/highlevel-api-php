<?php

namespace HighLevel\Services\Medias\Models;

/**
 * DeleteMediaObjectItem model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class DeleteMediaObjectItem
{
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
        $this->id = $data['_id'] ?? '';
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
            $result['_id'] = $this->id;
        }
        return $result;
    }
}
