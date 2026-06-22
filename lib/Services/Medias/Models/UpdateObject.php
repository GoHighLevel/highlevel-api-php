<?php

namespace HighLevel\Services\Medias\Models;

/**
 * UpdateObject model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class UpdateObject
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $alt_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
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
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        return $result;
    }
}
