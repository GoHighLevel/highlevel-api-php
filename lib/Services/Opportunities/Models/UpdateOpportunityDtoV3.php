<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * UpdateOpportunityDtoV3 model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class UpdateOpportunityDtoV3
{
    /**
     * @var string|null
     */
    public ?string $pipeline_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_stage_id = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var float|null
     */
    public ?float $monetary_value = null;

    /**
     * @var string|null
     */
    public ?string $forecast_expected_close_date = null;

    /**
     * @var float|null
     */
    public ?float $forecast_probability = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->pipeline_id = $data['pipelineId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->monetary_value = $data['monetaryValue'] ?? null;
        $this->forecast_expected_close_date = $data['forecastExpectedCloseDate'] ?? null;
        $this->forecast_probability = $data['forecastProbability'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->custom_fields = $data['customFields'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->pipeline_id !== null) {
            $result['pipelineId'] = $this->pipeline_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->pipeline_stage_id !== null) {
            $result['pipelineStageId'] = $this->pipeline_stage_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->monetary_value !== null) {
            $result['monetaryValue'] = $this->monetary_value;
        }
        if ($this->forecast_expected_close_date !== null) {
            $result['forecastExpectedCloseDate'] = $this->forecast_expected_close_date;
        }
        if ($this->forecast_probability !== null) {
            $result['forecastProbability'] = $this->forecast_probability;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = $this->custom_fields;
        }
        return $result;
    }
}
