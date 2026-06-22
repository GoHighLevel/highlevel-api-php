<?php

namespace HighLevel\Services\Businesses\Models;

/**
 * GetBusinessByIdResponseDto model
 * 
 * @package HighLevel\Services\Businesses\Models
 */
class GetBusinessByIdResponseDto
{
    /**
     * @var mixed
     */
    public $business;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->business = $data['business'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->business !== null) {
            $result['business'] = $this->business;
        }
        return $result;
    }
}
