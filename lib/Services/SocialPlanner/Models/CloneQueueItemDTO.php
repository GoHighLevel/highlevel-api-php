<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CloneQueueItemDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CloneQueueItemDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $session_id;

    /**
     * @var float
     */
    public float $order;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->session_id = $data['sessionId'] ?? '';
        $this->order = $data['order'] ?? 0;
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
        if ($this->order !== null) {
            $result['order'] = $this->order;
        }
        return $result;
    }
}
