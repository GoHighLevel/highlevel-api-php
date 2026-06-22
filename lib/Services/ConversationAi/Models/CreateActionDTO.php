<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * CreateActionDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class CreateActionDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $name;

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
        $this->type = $data['type'] ?? '';
        $this->name = $data['name'] ?? '';
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->details !== null) {
            $result['details'] = $this->details;
        }
        return $result;
    }
}
