<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * SetAccountsResultSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class SetAccountsResultSchema
{
    /**
     * @var string
     */
    public string $csv_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->csv_id = $data['csvId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->csv_id !== null) {
            $result['csvId'] = $this->csv_id;
        }
        return $result;
    }
}
