<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachGMBLocationDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachGMBLocationDTO
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $location;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $account;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location = $data['location'] ?? null;
        $this->account = $data['account'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location !== null) {
            $result['location'] = $this->location;
        }
        if ($this->account !== null) {
            $result['account'] = $this->account;
        }
        return $result;
    }
}
