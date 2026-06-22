<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * StageAggregationResponseDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class StageAggregationResponseDto
{
    /**
     * @var string
     */
    public string $pipeline_stage_id;

    /**
     * @var float
     */
    public float $total_count;

    /**
     * @var float
     */
    public float $total_value;

    /**
     * @var float
     */
    public float $weighted_value;

    /**
     * @var float
     */
    public float $open_value;

    /**
     * @var float
     */
    public float $open_weighted_value;

    /**
     * @var float
     */
    public float $won_value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? '';
        $this->total_count = $data['totalCount'] ?? 0;
        $this->total_value = $data['totalValue'] ?? 0;
        $this->weighted_value = $data['weightedValue'] ?? 0;
        $this->open_value = $data['openValue'] ?? 0;
        $this->open_weighted_value = $data['openWeightedValue'] ?? 0;
        $this->won_value = $data['wonValue'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->pipeline_stage_id !== null) {
            $result['pipelineStageId'] = $this->pipeline_stage_id;
        }
        if ($this->total_count !== null) {
            $result['totalCount'] = $this->total_count;
        }
        if ($this->total_value !== null) {
            $result['totalValue'] = $this->total_value;
        }
        if ($this->weighted_value !== null) {
            $result['weightedValue'] = $this->weighted_value;
        }
        if ($this->open_value !== null) {
            $result['openValue'] = $this->open_value;
        }
        if ($this->open_weighted_value !== null) {
            $result['openWeightedValue'] = $this->open_weighted_value;
        }
        if ($this->won_value !== null) {
            $result['wonValue'] = $this->won_value;
        }
        return $result;
    }
}
