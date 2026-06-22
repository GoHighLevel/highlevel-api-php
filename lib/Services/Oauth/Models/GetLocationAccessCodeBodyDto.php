<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * GetLocationAccessCodeBodyDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetLocationAccessCodeBodyDto
{
    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->company_id = $data['companyId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
