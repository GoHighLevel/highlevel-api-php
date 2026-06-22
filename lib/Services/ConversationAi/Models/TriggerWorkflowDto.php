<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * triggerWorkflowDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class TriggerWorkflowDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $workflow_ids;

    /**
     * @var string
     */
    public string $trigger_condition;

    /**
     * @var string|null
     */
    public ?string $trigger_message = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->workflow_ids = $data['workflowIds'] ?? [];
        $this->trigger_condition = $data['triggerCondition'] ?? '';
        $this->trigger_message = $data['triggerMessage'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->workflow_ids !== null) {
            $result['workflowIds'] = $this->workflow_ids;
        }
        if ($this->trigger_condition !== null) {
            $result['triggerCondition'] = $this->trigger_condition;
        }
        if ($this->trigger_message !== null) {
            $result['triggerMessage'] = $this->trigger_message;
        }
        return $result;
    }
}
