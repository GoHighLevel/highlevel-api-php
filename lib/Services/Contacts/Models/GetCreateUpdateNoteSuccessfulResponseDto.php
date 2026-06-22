<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * GetCreateUpdateNoteSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetCreateUpdateNoteSuccessfulResponseDto
{
    /**
     * @var mixed
     */
    public $note;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->note = $data['note'] ?? null;
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
            $result['note'] = $this->note;
        }
        return $result;
    }
}
