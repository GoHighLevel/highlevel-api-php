<?php

namespace HighLevel\Services\Businesses\Models;

/**
 * UpdateBusinessResponseDto model
 * 
 * @package HighLevel\Services\Businesses\Models
 */
class UpdateBusinessResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var mixed
     */
    public $buiseness;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->buiseness = $data['buiseness'] ?? null;
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
        if ($this->buiseness !== null) {
            $result['buiseness'] = $this->buiseness;
        }
        return $result;
    }
}
