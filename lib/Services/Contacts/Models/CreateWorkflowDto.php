<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateWorkflowDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateWorkflowDto
{
    /**
     * @var string|null
     */
    public ?string $event_start_time = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->event_start_time = $data['eventStartTime'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->event_start_time !== null) {
            $result['eventStartTime'] = $this->event_start_time;
        }
        return $result;
    }
}
