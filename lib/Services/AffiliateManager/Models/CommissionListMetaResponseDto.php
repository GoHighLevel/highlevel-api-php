<?php

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * CommissionListMetaResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class CommissionListMetaResponseDto
{
    /**
     * @var float
     */
    public float $count;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->count = $data['count'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
