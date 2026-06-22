<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * CancelScheduledResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class CancelScheduledResponseDto
{
    /**
     * @var float
     */
    public float $status;

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
        $this->status = $data['status'] ?? 0;
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
