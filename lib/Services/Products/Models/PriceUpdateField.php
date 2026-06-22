<?php

namespace HighLevel\Services\Products\Models;

/**
 * PriceUpdateField model
 * 
 * @package HighLevel\Services\Products\Models
 */
class PriceUpdateField
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var float
     */
    public float $value;

    /**
     * @var bool|null
     */
    public ?bool $round_to_whole = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->value = $data['value'] ?? 0;
        $this->round_to_whole = $data['roundToWhole'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->round_to_whole !== null) {
            $result['roundToWhole'] = $this->round_to_whole;
        }
        return $result;
    }
}
