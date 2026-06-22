<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * UpdateRebillingDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class UpdateRebillingDto
{
    /**
     * @var string
     */
    public string $product;

    /**
     * @var array&lt;string&gt;
     */
    public array $location_ids;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $config;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->product = $data['product'] ?? '';
        $this->location_ids = $data['locationIds'] ?? [];
        $this->config = $data['config'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->product !== null) {
            $result['product'] = $this->product;
        }
        if ($this->location_ids !== null) {
            $result['locationIds'] = $this->location_ids;
        }
        if ($this->config !== null) {
            $result['config'] = $this->config;
        }
        return $result;
    }
}
