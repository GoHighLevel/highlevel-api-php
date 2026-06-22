<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudienceLocaleDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudienceLocaleDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var float
     */
    public float $key;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->key = $data['key'] ?? 0;
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
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        return $result;
    }
}
