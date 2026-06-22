<?php

namespace HighLevel\Services\Products\Models;

/**
 * WeightOptionsDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class WeightOptionsDto
{
    /**
     * @var float
     */
    public float $value;

    /**
     * @var string
     */
    public string $unit;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->value = $data['value'] ?? 0;
        $this->unit = $data['unit'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }
}
