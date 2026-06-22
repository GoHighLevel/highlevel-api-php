<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * ActionDataDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class ActionDataDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $agent_id = null;

    /**
     * @var mixed
     */
    public $details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->agent_id = $data['agentId'] ?? null;
        $this->details = $data['details'] ?? null;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->agent_id !== null) {
            $result['agentId'] = $this->agent_id;
        }
        if ($this->details !== null) {
            $result['details'] = $this->details;
        }
        return $result;
    }
}
