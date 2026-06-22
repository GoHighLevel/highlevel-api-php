<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Campaigns\Models;

/**
 * CampaignsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Campaigns\Models
 */
class CampaignsSuccessfulResponseDto
{
    /**
     * @var array&lt;campaignsSchema&gt;|null
     */
    public ?array $campaigns = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CampaignsSchema objects
        if (isset($data['campaigns']) && is_array($data['campaigns'])) {
            $this->campaigns = array_map(function($item) {
                return is_array($item) ? new CampaignsSchema($item) : $item;
            }, $data['campaigns']);
        } else {
            $this->campaigns = $data['campaigns'] ?? null;
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
        if ($this->campaigns !== null) {
            $result['campaigns'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->campaigns);
        }
        return $result;
    }
}
