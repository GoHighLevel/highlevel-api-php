<?php

namespace HighLevel\Services\Locations\Models;

/**
 * LocationDeletedSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class LocationDeletedSuccessfulResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $message;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->message = $data['message'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
