<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * AgentActionResponseDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class AgentActionResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $action_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var mixed
     */
    public $action_parameters;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->action_type = $data['actionType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->action_parameters = $data['actionParameters'] ?? null;
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
        if ($this->action_type !== null) {
            $result['actionType'] = $this->action_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->action_parameters !== null) {
            $result['actionParameters'] = $this->action_parameters;
        }
        return $result;
    }
}
