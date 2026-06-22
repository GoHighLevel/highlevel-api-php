<?php

namespace HighLevel\Services\Locations\Models;

/**
 * LocationTaskListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class LocationTaskListSuccessfulResponseDto
{
    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $tasks = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tasks = $data['tasks'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tasks !== null) {
            $result['tasks'] = $this->tasks;
        }
        return $result;
    }
}
