<?php

namespace HighLevel\Services\Products\Models;

/**
 * BulkEditResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class BulkEditResponseDto
{
    /**
     * @var string
     */
    public string $message;

    /**
     * @var bool
     */
    public bool $status;

    /**
     * @var float
     */
    public float $updated_count;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? '';
        $this->status = $data['status'] ?? false;
        $this->updated_count = $data['updatedCount'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updated_count !== null) {
            $result['updatedCount'] = $this->updated_count;
        }
        return $result;
    }
}
