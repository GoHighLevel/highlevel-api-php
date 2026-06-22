<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GetCreateUpdateNoteSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GetCreateUpdateNoteSuccessfulResponseDto
{
    /**
     * @var GetNoteSchema|null
     */
    public ?GetNoteSchema $note = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single GetNoteSchema object
        if (isset($data['note']) && is_array($data['note'])) {
            $this->note = new GetNoteSchema($data['note']);
        } else {
            $this->note = $data['note'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->note !== null) {
            $result['note'] = is_object($this->note) && method_exists($this->note, 'toArray') 
                ? $this->note->toArray() 
                : $this->note;
        }
        return $result;
    }
}
