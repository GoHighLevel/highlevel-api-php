<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * StartEditSessionResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class StartEditSessionResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string|null
     */
    public ?string $session_id = null;

    /**
     * @var float|null
     */
    public ?float $item_count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        $this->session_id = $data['sessionId'] ?? null;
        $this->item_count = $data['itemCount'] ?? null;
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
        if ($this->session_id !== null) {
            $result['sessionId'] = $this->session_id;
        }
        if ($this->item_count !== null) {
            $result['itemCount'] = $this->item_count;
        }
        return $result;
    }
}
