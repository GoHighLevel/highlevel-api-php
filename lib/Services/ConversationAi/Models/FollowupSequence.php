<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * FollowupSequence model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FollowupSequence
{
    /**
     * @var float
     */
    public float $id;

    /**
     * @var string
     */
    public string $followup_time_unit;

    /**
     * @var float
     */
    public float $followup_time;

    /**
     * @var bool|null
     */
    public ?bool $ai_enabled_message = null;

    /**
     * @var bool|null
     */
    public ?bool $trigger_workflow = null;

    /**
     * @var string|null
     */
    public ?string $custom_message = null;

    /**
     * @var string|null
     */
    public ?string $workflow_id = null;

    /**
     * @var bool|null
     */
    public ?bool $contact_requested = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? 0;
        $this->followup_time_unit = $data['followupTimeUnit'] ?? '';
        $this->followup_time = $data['followupTime'] ?? 0;
        $this->ai_enabled_message = $data['aiEnabledMessage'] ?? null;
        $this->trigger_workflow = $data['triggerWorkflow'] ?? null;
        $this->custom_message = $data['customMessage'] ?? null;
        $this->workflow_id = $data['workflowId'] ?? null;
        $this->contact_requested = $data['contactRequested'] ?? null;
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
        if ($this->followup_time_unit !== null) {
            $result['followupTimeUnit'] = $this->followup_time_unit;
        }
        if ($this->followup_time !== null) {
            $result['followupTime'] = $this->followup_time;
        }
        if ($this->ai_enabled_message !== null) {
            $result['aiEnabledMessage'] = $this->ai_enabled_message;
        }
        if ($this->trigger_workflow !== null) {
            $result['triggerWorkflow'] = $this->trigger_workflow;
        }
        if ($this->custom_message !== null) {
            $result['customMessage'] = $this->custom_message;
        }
        if ($this->workflow_id !== null) {
            $result['workflowId'] = $this->workflow_id;
        }
        if ($this->contact_requested !== null) {
            $result['contactRequested'] = $this->contact_requested;
        }
        return $result;
    }
}
