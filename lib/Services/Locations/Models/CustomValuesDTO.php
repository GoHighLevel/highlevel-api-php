<?php

namespace HighLevel\Services\Locations\Models;

/**
 * customValuesDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class CustomValuesDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->value = $data['value'] ?? '';
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
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }
}
