<?php

namespace HighLevel\Services\Emails\Models;

/**
 * GetBulkActionCampaignsResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class GetBulkActionCampaignsResponseDto
{
    /**
     * @var array&lt;BulkActionCampaignDto&gt;
     */
    public array $campaigns;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BulkActionCampaignDto objects
        if (isset($data['campaigns']) && is_array($data['campaigns'])) {
            $this->campaigns = array_map(function($item) {
                return is_array($item) ? new BulkActionCampaignDto($item) : $item;
            }, $data['campaigns']);
        } else {
            $this->campaigns = $data['campaigns'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
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
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
