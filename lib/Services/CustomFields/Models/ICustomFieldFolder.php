<?php

namespace HighLevel\Services\CustomFields\Models;

/**
 * ICustomFieldFolder model
 * 
 * @package HighLevel\Services\CustomFields\Models
 */
class ICustomFieldFolder
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $object_key;

    /**
     * @var string
     */
    public string $location_id;

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
        $this->id = $data['id'] ?? '';
        $this->object_key = $data['objectKey'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->object_key !== null) {
            $result['objectKey'] = $this->object_key;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }
}
