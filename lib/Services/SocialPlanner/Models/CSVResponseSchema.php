<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CSVResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CSVResponseSchema
{
    /**
     * @var mixed
     */
    public $csv;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->csv = $data['csv'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->csv !== null) {
            $result['csv'] = $this->csv;
        }
        return $result;
    }
}
