<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * StartEditSessionDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class StartEditSessionDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
