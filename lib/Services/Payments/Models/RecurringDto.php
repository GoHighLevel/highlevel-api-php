<?php

namespace HighLevel\Services\Payments\Models;

/**
 * RecurringDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class RecurringDto
{
    /**
     * @var string
     */
    public string $interval;

    /**
     * @var float
     */
    public float $interval_count;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->interval = $data['interval'] ?? '';
        $this->interval_count = $data['intervalCount'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->interval !== null) {
            $result['interval'] = $this->interval;
        }
        if ($this->interval_count !== null) {
            $result['intervalCount'] = $this->interval_count;
        }
        return $result;
    }
}
