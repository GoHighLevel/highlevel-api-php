<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallActionSchema model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallActionSchema
{
    /**
     * @var string|null
     */
    public ?string $action_id = null;

    /**
     * @var string
     */
    public string $action_type;

    /**
     * @var string
     */
    public string $action_name;

    /**
     * @var mixed
     */
    public $action_parameters;

    /**
     * @var string|null
     */
    public ?string $executed_at = null;

    /**
     * @var string|null
     */
    public ?string $trigger_received_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->action_id = $data['actionId'] ?? null;
        $this->action_type = $data['actionType'] ?? '';
        $this->action_name = $data['actionName'] ?? '';
        $this->action_parameters = $data['actionParameters'] ?? null;
        $this->executed_at = $data['executedAt'] ?? null;
        $this->trigger_received_at = $data['triggerReceivedAt'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->action_id !== null) {
            $result['actionId'] = $this->action_id;
        }
        if ($this->action_type !== null) {
            $result['actionType'] = $this->action_type;
        }
        if ($this->action_name !== null) {
            $result['actionName'] = $this->action_name;
        }
        if ($this->action_parameters !== null) {
            $result['actionParameters'] = $this->action_parameters;
        }
        if ($this->executed_at !== null) {
            $result['executedAt'] = $this->executed_at;
        }
        if ($this->trigger_received_at !== null) {
            $result['triggerReceivedAt'] = $this->trigger_received_at;
        }
        return $result;
    }
}
