<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * DeleteUpdateOpportunitySuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class DeleteUpdateOpportunitySuccessfulResponseDto
{
    /**
     * @var bool|null
     */
    public ?bool $succeded = null;

    /**
     * @var bool|null
     */
    public ?bool $success = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeded = $data['succeded'] ?? null;
        $this->success = $data['success'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->succeded !== null) {
            $result['succeded'] = $this->succeded;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }
}
