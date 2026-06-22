<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Companies\Models;

/**
 * GetCompanyByIdSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Companies\Models
 */
class GetCompanyByIdSuccessfulResponseDto
{
    /**
     * @var GetCompanyByIdSchema|null
     */
    public ?GetCompanyByIdSchema $company = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single GetCompanyByIdSchema object
        if (isset($data['company']) && is_array($data['company'])) {
            $this->company = new GetCompanyByIdSchema($data['company']);
        } else {
            $this->company = $data['company'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->company !== null) {
            $result['company'] = is_object($this->company) && method_exists($this->company, 'toArray') 
                ? $this->company->toArray() 
                : $this->company;
        }
        return $result;
    }
}
