<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * DiscountDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class DiscountDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var float
     */
    public float $value;

    /**
     * @var string
     */
    public string $type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->value = $data['value'] ?? 0;
        $this->type = $data['type'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
