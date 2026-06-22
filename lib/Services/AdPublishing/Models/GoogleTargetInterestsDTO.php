<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleTargetInterestsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleTargetInterestsDTO
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $affinity = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $in_market = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->affinity = $data['affinity'] ?? null;
        $this->in_market = $data['inMarket'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->affinity !== null) {
            $result['affinity'] = $this->affinity;
        }
        if ($this->in_market !== null) {
            $result['inMarket'] = $this->in_market;
        }
        return $result;
    }
}
