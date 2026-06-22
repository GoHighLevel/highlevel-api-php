<?php

namespace HighLevel\Services\Payments\Models;

/**
 * ListWhitelabelIntegrationProviderResponseDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ListWhitelabelIntegrationProviderResponseDto
{
    /**
     * @var mixed
     */
    public $providers;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->providers = $data['providers'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->providers !== null) {
            $result['providers'] = $this->providers;
        }
        return $result;
    }
}
