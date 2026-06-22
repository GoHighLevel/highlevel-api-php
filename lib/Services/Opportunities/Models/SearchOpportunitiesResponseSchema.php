<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * SearchOpportunitiesResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class SearchOpportunitiesResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var float|null
     */
    public ?float $monetary_value = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_id = null;

    /**
     * @var string|null
     */
    public ?string $pipeline_stage_id = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $last_status_change_at = null;

    /**
     * @var string|null
     */
    public ?string $last_stage_change_at = null;

    /**
     * @var string|null
     */
    public ?string $last_action_date = null;

    /**
     * @var string|null
     */
    public ?string $index_version = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var string|null
     */
    public ?string $forecast_expected_close_date = null;

    /**
     * @var string|null
     */
    public ?string $forecast_original_close_date = null;

    /**
     * @var float|null
     */
    public ?float $forecast_slippage_count = null;

    /**
     * @var float|null
     */
    public ?float $forecast_days_slipped = null;

    /**
     * @var string|null
     */
    public ?string $forecast_last_slipped_at = null;

    /**
     * @var float|null
     */
    public ?float $forecast_probability = null;

    /**
     * @var float|null
     */
    public ?float $effective_probability = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var mixed
     */
    public $contact;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $notes = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $tasks = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $calendar_events = null;

    /**
     * @var string|null
     */
    public ?string $lost_reason_id = null;

    /**
     * @var array&lt;CustomFieldResponseSchema&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $followers = null;

    /**
     * @var string|null
     */
    public ?string $external_object_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->monetary_value = $data['monetaryValue'] ?? null;
        $this->pipeline_id = $data['pipelineId'] ?? null;
        $this->pipeline_stage_id = $data['pipelineStageId'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->last_status_change_at = $data['lastStatusChangeAt'] ?? null;
        $this->last_stage_change_at = $data['lastStageChangeAt'] ?? null;
        $this->last_action_date = $data['lastActionDate'] ?? null;
        $this->index_version = $data['indexVersion'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->forecast_expected_close_date = $data['forecastExpectedCloseDate'] ?? null;
        $this->forecast_original_close_date = $data['forecastOriginalCloseDate'] ?? null;
        $this->forecast_slippage_count = $data['forecastSlippageCount'] ?? null;
        $this->forecast_days_slipped = $data['forecastDaysSlipped'] ?? null;
        $this->forecast_last_slipped_at = $data['forecastLastSlippedAt'] ?? null;
        $this->forecast_probability = $data['forecastProbability'] ?? null;
        $this->effective_probability = $data['effectiveProbability'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->contact = $data['contact'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->tasks = $data['tasks'] ?? null;
        $this->calendar_events = $data['calendarEvents'] ?? null;
        $this->lost_reason_id = $data['lostReasonId'] ?? null;
        // Handle array of CustomFieldResponseSchema objects
        if (isset($data['customFields']) && is_array($data['customFields'])) {
            $this->custom_fields = array_map(function($item) {
                return is_array($item) ? new CustomFieldResponseSchema($item) : $item;
            }, $data['customFields']);
        } else {
            $this->custom_fields = $data['customFields'] ?? null;
        }
        $this->followers = $data['followers'] ?? null;
        $this->external_object_id = $data['externalObjectId'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->monetary_value !== null) {
            $result['monetaryValue'] = $this->monetary_value;
        }
        if ($this->pipeline_id !== null) {
            $result['pipelineId'] = $this->pipeline_id;
        }
        if ($this->pipeline_stage_id !== null) {
            $result['pipelineStageId'] = $this->pipeline_stage_id;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->last_status_change_at !== null) {
            $result['lastStatusChangeAt'] = $this->last_status_change_at;
        }
        if ($this->last_stage_change_at !== null) {
            $result['lastStageChangeAt'] = $this->last_stage_change_at;
        }
        if ($this->last_action_date !== null) {
            $result['lastActionDate'] = $this->last_action_date;
        }
        if ($this->index_version !== null) {
            $result['indexVersion'] = $this->index_version;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->forecast_expected_close_date !== null) {
            $result['forecastExpectedCloseDate'] = $this->forecast_expected_close_date;
        }
        if ($this->forecast_original_close_date !== null) {
            $result['forecastOriginalCloseDate'] = $this->forecast_original_close_date;
        }
        if ($this->forecast_slippage_count !== null) {
            $result['forecastSlippageCount'] = $this->forecast_slippage_count;
        }
        if ($this->forecast_days_slipped !== null) {
            $result['forecastDaysSlipped'] = $this->forecast_days_slipped;
        }
        if ($this->forecast_last_slipped_at !== null) {
            $result['forecastLastSlippedAt'] = $this->forecast_last_slipped_at;
        }
        if ($this->forecast_probability !== null) {
            $result['forecastProbability'] = $this->forecast_probability;
        }
        if ($this->effective_probability !== null) {
            $result['effectiveProbability'] = $this->effective_probability;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact !== null) {
            $result['contact'] = $this->contact;
        }
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        if ($this->tasks !== null) {
            $result['tasks'] = $this->tasks;
        }
        if ($this->calendar_events !== null) {
            $result['calendarEvents'] = $this->calendar_events;
        }
        if ($this->lost_reason_id !== null) {
            $result['lostReasonId'] = $this->lost_reason_id;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_fields);
        }
        if ($this->followers !== null) {
            $result['followers'] = $this->followers;
        }
        if ($this->external_object_id !== null) {
            $result['externalObjectId'] = $this->external_object_id;
        }
        return $result;
    }
}
