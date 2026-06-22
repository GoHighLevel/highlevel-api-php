<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * WorkflowTriggerParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class WorkflowTriggerParameters
{
    /**
     * @var string
     */
    public string $trigger_prompt;

    /**
     * @var string
     */
    public string $trigger_message;

    /**
     * @var string
     */
    public string $workflow_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->trigger_prompt = $data['triggerPrompt'] ?? '';
        $this->trigger_message = $data['triggerMessage'] ?? '';
        $this->workflow_id = $data['workflowId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->trigger_prompt !== null) {
            $result['triggerPrompt'] = $this->trigger_prompt;
        }
        if ($this->trigger_message !== null) {
            $result['triggerMessage'] = $this->trigger_message;
        }
        if ($this->workflow_id !== null) {
            $result['workflowId'] = $this->workflow_id;
        }
        return $result;
    }
}
