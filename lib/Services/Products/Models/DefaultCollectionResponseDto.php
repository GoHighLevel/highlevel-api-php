<?php

namespace HighLevel\Services\Products\Models;

/**
 * DefaultCollectionResponseDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class DefaultCollectionResponseDto
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var bool
     */
    public bool $status;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data['data'] ?? null;
        $this->status = $data['status'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
