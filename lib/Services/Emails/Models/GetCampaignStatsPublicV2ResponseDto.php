<?php

namespace HighLevel\Services\Emails\Models;

/**
 * GetCampaignStatsPublicV2ResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class GetCampaignStatsPublicV2ResponseDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $source;

    /**
     * @var string
     */
    public string $source_id;

    /**
     * @var string|null
     */
    public ?string $sub_source_id = null;

    /**
     * @var mixed
     */
    public $stats;

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
        $this->location_id = $data['locationId'] ?? '';
        $this->source = $data['source'] ?? '';
        $this->source_id = $data['sourceId'] ?? '';
        $this->sub_source_id = $data['subSourceId'] ?? null;
        $this->stats = $data['stats'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->sub_source_id !== null) {
            $result['subSourceId'] = $this->sub_source_id;
        }
        if ($this->stats !== null) {
            $result['stats'] = $this->stats;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
