<?php

namespace HighLevel\Services\CustomFields\Models;

/**
 * CreateFolder model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class CreateFolder
{
    /**
     * @var string
     */
    public string $object_key;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->object_key = $data['objectKey'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->object_key !== null) {
            $result['objectKey'] = $this->object_key;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
