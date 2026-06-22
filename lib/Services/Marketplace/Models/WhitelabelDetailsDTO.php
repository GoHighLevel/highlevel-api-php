<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * WhitelabelDetailsDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class WhitelabelDetailsDTO
{
    /**
     * @var string
     */
    public string $domain;

    /**
     * @var string
     */
    public string $logo_url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->domain = $data['domain'] ?? '';
        $this->logo_url = $data['logoUrl'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->domain !== null) {
            $result['domain'] = $this->domain;
        }
        if ($this->logo_url !== null) {
            $result['logoUrl'] = $this->logo_url;
        }
        return $result;
    }
}
