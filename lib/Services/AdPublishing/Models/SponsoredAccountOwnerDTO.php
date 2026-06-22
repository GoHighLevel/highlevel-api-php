<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * SponsoredAccountOwnerDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class SponsoredAccountOwnerDTO
{
    /**
     * @var string
     */
    public string $sponsored_account;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->sponsored_account = $data['sponsoredAccount'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->sponsored_account !== null) {
            $result['sponsoredAccount'] = $this->sponsored_account;
        }
        return $result;
    }
}
