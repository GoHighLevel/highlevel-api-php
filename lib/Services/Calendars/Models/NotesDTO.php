<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * NotesDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class NotesDTO
{
    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $body;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->user_id = $data['userId'] ?? null;
        $this->body = $data['body'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        return $result;
    }
}
