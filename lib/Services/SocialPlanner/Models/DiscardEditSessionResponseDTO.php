<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * DiscardEditSessionResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class DiscardEditSessionResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
