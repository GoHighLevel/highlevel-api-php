<?php

namespace HighLevel\Services\Funnels\Models;

/**
 * CreateRedirectResponseDTO model
 * 
 * @package HighLevel\Services\Funnels\Models
 */
class CreateRedirectResponseDTO
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data['data'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }
}
