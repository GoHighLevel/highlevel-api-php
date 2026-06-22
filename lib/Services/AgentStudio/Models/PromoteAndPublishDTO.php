<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * PromoteAndPublishDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class PromoteAndPublishDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $user_name = null;

    /**
     * @var string|null
     */
    public ?string $user_email = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->user_id = $data['userId'] ?? null;
        $this->user_name = $data['userName'] ?? null;
        $this->user_email = $data['userEmail'] ?? null;
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
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->user_name !== null) {
            $result['userName'] = $this->user_name;
        }
        if ($this->user_email !== null) {
            $result['userEmail'] = $this->user_email;
        }
        return $result;
    }
}
