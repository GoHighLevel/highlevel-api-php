<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UpdatePostSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UpdatePostSuccessfulResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var float
     */
    public float $status_code;

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
        $this->status_code = $data['statusCode'] ?? 0;
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
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
