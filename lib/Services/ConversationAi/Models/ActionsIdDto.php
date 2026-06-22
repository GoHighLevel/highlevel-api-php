<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * ActionsIdDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class ActionsIdDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->type = $data['type'] ?? '';
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
