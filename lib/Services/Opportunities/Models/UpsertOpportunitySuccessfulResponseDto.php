<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Opportunities\Models;

/**
 * UpsertOpportunitySuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class UpsertOpportunitySuccessfulResponseDto
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $opportunity;

    /**
     * @var bool
     */
    public bool $new;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->opportunity = $data['opportunity'] ?? null;
        $this->new = $data['new'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->opportunity !== null) {
            $result['opportunity'] = $this->opportunity;
        }
        if ($this->new !== null) {
            $result['new'] = $this->new;
        }
        return $result;
    }
}
