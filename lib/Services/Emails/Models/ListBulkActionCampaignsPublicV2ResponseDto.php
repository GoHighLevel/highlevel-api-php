<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ListBulkActionCampaignsPublicV2ResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ListBulkActionCampaignsPublicV2ResponseDto
{
    /**
     * @var array&lt;BulkActionCampaignPublicV2Dto&gt;
     */
    public array $campaigns;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BulkActionCampaignPublicV2Dto objects
        if (isset($data['campaigns']) && is_array($data['campaigns'])) {
            $this->campaigns = array_map(function($item) {
                return is_array($item) ? new BulkActionCampaignPublicV2Dto($item) : $item;
            }, $data['campaigns']);
        } else {
            $this->campaigns = $data['campaigns'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
        $this->trace_id = $data['traceId'] ?? null;
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
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
