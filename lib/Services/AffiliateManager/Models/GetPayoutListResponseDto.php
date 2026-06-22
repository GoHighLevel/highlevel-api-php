<?php

namespace HighLevel\Services\AffiliateManager\Models;

/**
 * GetPayoutListResponseDto model
 * 
 * @package HighLevel\Services\AffiliateManager\Models
 */
class GetPayoutListResponseDto
{
    /**
     * @var array&lt;PayoutListItemResponseDto&gt;
     */
    public array $payouts;

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
        // Handle array of PayoutListItemResponseDto objects
        if (isset($data['payouts']) && is_array($data['payouts'])) {
            $this->payouts = array_map(function($item) {
                return is_array($item) ? new PayoutListItemResponseDto($item) : $item;
            }, $data['payouts']);
        } else {
            $this->payouts = $data['payouts'] ?? [];
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
        if ($this->payouts !== null) {
            $result['payouts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->payouts);
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
