<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreateGoogleIntegrationDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreateGoogleIntegrationDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $ad_account_id;

    /**
     * @var string
     */
    public string $mcc_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->ad_account_id = $data['adAccountId'] ?? '';
        $this->mcc_id = $data['mccId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->ad_account_id !== null) {
            $result['adAccountId'] = $this->ad_account_id;
        }
        if ($this->mcc_id !== null) {
            $result['mccId'] = $this->mcc_id;
        }
        return $result;
    }
}
