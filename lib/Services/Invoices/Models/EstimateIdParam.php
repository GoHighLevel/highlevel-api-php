<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * EstimateIdParam model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class EstimateIdParam
{
    /**
     * @var string
     */
    public string $estimate_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->estimate_id = $data['estimateId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->estimate_id !== null) {
            $result['estimateId'] = $this->estimate_id;
        }
        return $result;
    }
}
