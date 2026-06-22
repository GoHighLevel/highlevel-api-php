<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * GenerateEstimateNumberResponse model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class GenerateEstimateNumberResponse
{
    /**
     * @var float
     */
    public float $estimate_number;

    /**
     * @var string
     */
    public string $trace_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->estimate_number = $data['estimateNumber'] ?? 0;
        $this->trace_id = $data['traceId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->estimate_number !== null) {
            $result['estimateNumber'] = $this->estimate_number;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
