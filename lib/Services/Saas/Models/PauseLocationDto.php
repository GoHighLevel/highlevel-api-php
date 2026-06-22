<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * PauseLocationDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class PauseLocationDto
{
    /**
     * @var bool
     */
    public bool $paused;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->paused = $data['paused'] ?? false;
        $this->company_id = $data['companyId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->paused !== null) {
            $result['paused'] = $this->paused;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        return $result;
    }
}
