<?php

namespace HighLevel\Services\Emails\Models;

/**
 * GetCampaignStatsResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class GetCampaignStatsResponseDto
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
        return $result;
    }
}
