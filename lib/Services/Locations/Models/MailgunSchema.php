<?php

namespace HighLevel\Services\Locations\Models;

/**
 * MailgunSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class MailgunSchema
{
    /**
     * @var string
     */
    public string $api_key;

    /**
     * @var string
     */
    public string $domain;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->api_key = $data['apiKey'] ?? '';
        $this->domain = $data['domain'] ?? '';
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
        if ($this->domain !== null) {
            $result['domain'] = $this->domain;
        }
        return $result;
    }
}
