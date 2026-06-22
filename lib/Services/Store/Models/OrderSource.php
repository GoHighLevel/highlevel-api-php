<?php

namespace HighLevel\Services\Store\Models;

/**
 * OrderSource model
 * 
 * @package HighLevel\Services\Store\Models
 */
class OrderSource
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $sub_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->sub_type = $data['subType'] ?? null;
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
        if ($this->sub_type !== null) {
            $result['subType'] = $this->sub_type;
        }
        return $result;
    }
}
