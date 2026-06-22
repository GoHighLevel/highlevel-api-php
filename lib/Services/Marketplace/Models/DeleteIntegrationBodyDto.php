<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * DeleteIntegrationBodyDto model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class DeleteIntegrationBodyDto
{
    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $reason = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->company_id = $data['companyId'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->reason = $data['reason'] ?? null;
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
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }
}
