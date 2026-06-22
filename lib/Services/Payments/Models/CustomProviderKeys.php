<?php

namespace HighLevel\Services\Payments\Models;

/**
 * CustomProviderKeys model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CustomProviderKeys
{
    /**
     * @var string
     */
    public string $api_key;

    /**
     * @var string
     */
    public string $publishable_key;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->api_key = $data['apiKey'] ?? '';
        $this->publishable_key = $data['publishableKey'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->api_key !== null) {
            $result['apiKey'] = $this->api_key;
        }
        if ($this->publishable_key !== null) {
            $result['publishableKey'] = $this->publishable_key;
        }
        return $result;
    }
}
