<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * AipErrorResponseDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class AipErrorResponseDto
{
    /**
     * @var mixed
     */
    public $error;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->error = $data['error'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        return $result;
    }
}
