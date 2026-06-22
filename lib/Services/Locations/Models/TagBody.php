<?php

namespace HighLevel\Services\Locations\Models;

/**
 * tagBody model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class TagBody
{
    /**
     * @var string
     */
    public string $name;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }
}
