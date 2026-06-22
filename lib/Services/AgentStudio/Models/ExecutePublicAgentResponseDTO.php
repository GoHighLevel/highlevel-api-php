<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * ExecutePublicAgentResponseDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class ExecutePublicAgentResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $execution_id;

    /**
     * @var string
     */
    public string $interaction_id;

    /**
     * @var string
     */
    public string $response;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $next_expected_input;

    /**
     * @var bool
     */
    public bool $goal_completion;

    /**
     * @var string
     */
    public string $execution_status;

    /**
     * @var bool
     */
    public bool $flow_switch;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $attachments;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $generative_outputs;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->execution_id = $data['executionId'] ?? '';
        $this->interaction_id = $data['interactionId'] ?? '';
        $this->response = $data['response'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->next_expected_input = $data['nextExpectedInput'] ?? '';
        $this->goal_completion = $data['goalCompletion'] ?? false;
        $this->execution_status = $data['executionStatus'] ?? '';
        $this->flow_switch = $data['flowSwitch'] ?? false;
        $this->attachments = $data['attachments'] ?? [];
        $this->generative_outputs = $data['generativeOutputs'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->execution_id !== null) {
            $result['executionId'] = $this->execution_id;
        }
        if ($this->interaction_id !== null) {
            $result['interactionId'] = $this->interaction_id;
        }
        if ($this->response !== null) {
            $result['response'] = $this->response;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->next_expected_input !== null) {
            $result['nextExpectedInput'] = $this->next_expected_input;
        }
        if ($this->goal_completion !== null) {
            $result['goalCompletion'] = $this->goal_completion;
        }
        if ($this->execution_status !== null) {
            $result['executionStatus'] = $this->execution_status;
        }
        if ($this->flow_switch !== null) {
            $result['flowSwitch'] = $this->flow_switch;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->generative_outputs !== null) {
            $result['generativeOutputs'] = $this->generative_outputs;
        }
        return $result;
    }
}
