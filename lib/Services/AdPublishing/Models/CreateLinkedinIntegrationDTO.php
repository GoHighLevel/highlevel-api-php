<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreateLinkedinIntegrationDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreateLinkedinIntegrationDTO
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
    public string $ad_account_name;

    /**
     * @var string
     */
    public string $currency_code;

    /**
     * @var string
     */
    public string $organization_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->ad_account_id = $data['adAccountId'] ?? '';
        $this->ad_account_name = $data['adAccountName'] ?? '';
        $this->currency_code = $data['currencyCode'] ?? '';
        $this->organization_id = $data['organizationId'] ?? '';
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
        if ($this->ad_account_name !== null) {
            $result['adAccountName'] = $this->ad_account_name;
        }
        if ($this->currency_code !== null) {
            $result['currencyCode'] = $this->currency_code;
        }
        if ($this->organization_id !== null) {
            $result['organizationId'] = $this->organization_id;
        }
        return $result;
    }
}
