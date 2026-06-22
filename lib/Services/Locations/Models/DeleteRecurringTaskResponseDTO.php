<?php

namespace HighLevel\Services\Locations\Models;

/**
 * DeleteRecurringTaskResponseDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class DeleteRecurringTaskResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool
     */
    public bool $success;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->success = $data['success'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }
}
