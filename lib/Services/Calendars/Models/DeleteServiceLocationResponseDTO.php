<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * DeleteServiceLocationResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class DeleteServiceLocationResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

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
        $this->success = $data['success'] ?? false;
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
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
