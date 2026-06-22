<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * LinkedinPollSettingsDto model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class LinkedinPollSettingsDto
{
    /**
     * @var string
     */
    public string $duration;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->duration = $data['duration'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        return $result;
    }
}
