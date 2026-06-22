<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * ResetQueueItemDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class ResetQueueItemDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $session_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->session_id = $data['sessionId'] ?? null;
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
        if ($this->session_id !== null) {
            $result['sessionId'] = $this->session_id;
        }
        return $result;
    }
}
