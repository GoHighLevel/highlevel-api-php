<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * UpsertOpportunityDto model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class UpsertOpportunityDto
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $pipeline_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $followers;

    /**
     * @var bool
     */
    public bool $is_remove_all_followers;

    /**
     * @var string
     */
    public string $followers_action_type;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_stage_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $monetary_value = null;

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
     * @var string|null
     */
    public ?string $lost_reason_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->pipeline_id = $data['pipelineId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->followers = $data['followers'] ?? [];
        $this->is_remove_all_followers = $data['isRemoveAllFollowers'] ?? false;
        $this->followers_action_type = $data['followersActionType'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? null;
        $this->monetary_value = $data['monetaryValue'] ?? null;
        $this->forecast_expected_close_date = $data['forecastExpectedCloseDate'] ?? null;
        $this->forecast_probability = $data['forecastProbability'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->lost_reason_id = $data['lostReasonId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->pipeline_id !== null) {
            $result['pipelineId'] = $this->pipeline_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->followers !== null) {
            $result['followers'] = $this->followers;
        }
        if ($this->is_remove_all_followers !== null) {
            $result['isRemoveAllFollowers'] = $this->is_remove_all_followers;
        }
        if ($this->followers_action_type !== null) {
            $result['followersActionType'] = $this->followers_action_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->pipeline_stage_id !== null) {
            $result['pipelineStageId'] = $this->pipeline_stage_id;
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
        if ($this->lost_reason_id !== null) {
            $result['lostReasonId'] = $this->lost_reason_id;
        }
        return $result;
    }
}
