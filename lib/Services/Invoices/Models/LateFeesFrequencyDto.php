<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * LateFeesFrequencyDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class LateFeesFrequencyDto
{
    /**
     * @var float
     */
    public float $interval_count;

    /**
     * @var string
     */
    public string $interval;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->interval_count = $data['intervalCount'] ?? 0;
        $this->interval = $data['interval'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->interval_count !== null) {
            $result['intervalCount'] = $this->interval_count;
        }
        if ($this->interval !== null) {
            $result['interval'] = $this->interval;
        }
        return $result;
    }
}
