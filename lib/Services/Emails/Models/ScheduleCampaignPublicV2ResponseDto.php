<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignPublicV2ResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignPublicV2ResponseDto
{
    /**
     * @var string
     */
    public string $campaign_id;

    /**
     * @var string
     */
    public string $source_id;

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
        $this->campaign_id = $data['campaignId'] ?? '';
        $this->source_id = $data['sourceId'] ?? '';
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
        if ($this->campaign_id !== null) {
            $result['campaignId'] = $this->campaign_id;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
