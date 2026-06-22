<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DiscardEditSessionDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DiscardEditSessionDTO
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
     * @var bool|null
     */
    public ?bool $keep_in_draft = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->session_id = $data['sessionId'] ?? '';
        $this->keep_in_draft = $data['keepInDraft'] ?? null;
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
        if ($this->keep_in_draft !== null) {
            $result['keepInDraft'] = $this->keep_in_draft;
        }
        return $result;
    }
}
