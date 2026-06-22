<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetGoogleLocationAccountSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetGoogleLocationAccountSchema
{
    /**
     * @var mixed
     */
    public $locations;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->locations = $data['locations'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->locations !== null) {
            $result['locations'] = $this->locations;
        }
        return $result;
    }
}
