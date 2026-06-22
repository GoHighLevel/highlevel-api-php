<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * GetCommissionListResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class GetCommissionListResponseDto
{
    /**
     * @var array&lt;CommissionListItemResponseDto&gt;
     */
    public array $commissions;

    /**
     * @var mixed
     */
    public $meta;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CommissionListItemResponseDto objects
        if (isset($data['commissions']) && is_array($data['commissions'])) {
            $this->commissions = array_map(function($item) {
                return is_array($item) ? new CommissionListItemResponseDto($item) : $item;
            }, $data['commissions']);
        } else {
            $this->commissions = $data['commissions'] ?? [];
        }
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->commissions !== null) {
            $result['commissions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->commissions);
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
