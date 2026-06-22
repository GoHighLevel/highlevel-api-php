<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * MetaDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class MetaDTO
{
    /**
     * @var string|null
     */
    public ?string $count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->count = $data['count'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
