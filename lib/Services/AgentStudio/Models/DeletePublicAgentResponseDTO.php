<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * DeletePublicAgentResponseDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class DeletePublicAgentResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var string|null
     */
    public ?string $agent_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->message = $data['message'] ?? '';
        $this->agent_id = $data['agentId'] ?? null;
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
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->agent_id !== null) {
            $result['agentId'] = $this->agent_id;
        }
        return $result;
    }
}
