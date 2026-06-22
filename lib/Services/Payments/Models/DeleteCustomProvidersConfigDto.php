<?php

namespace HighLevel\Services\Payments\Models;

/**
 * DeleteCustomProvidersConfigDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class DeleteCustomProvidersConfigDto
{
    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->live_mode = $data['liveMode'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        return $result;
    }
}
