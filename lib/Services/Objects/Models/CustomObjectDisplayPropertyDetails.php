<?php

namespace HighLevel\Services\Objects\Models;

/**
 * CustomObjectDisplayPropertyDetails model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CustomObjectDisplayPropertyDetails
{
    /**
     * @var string
     */
    public string $key;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $data_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->key = $data['key'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->data_type = $data['dataType'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->data_type !== null) {
            $result['dataType'] = $this->data_type;
        }
        return $result;
    }
}
