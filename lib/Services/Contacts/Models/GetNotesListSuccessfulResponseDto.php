<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * GetNotesListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetNotesListSuccessfulResponseDto
{
    /**
     * @var array&lt;GetNoteSchema&gt;|null
     */
    public ?array $notes = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetNoteSchema objects
        if (isset($data['notes']) && is_array($data['notes'])) {
            $this->notes = array_map(function($item) {
                return is_array($item) ? new GetNoteSchema($item) : $item;
            }, $data['notes']);
        } else {
            $this->notes = $data['notes'] ?? null;
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
        if ($this->notes !== null) {
            $result['notes'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->notes);
        }
        return $result;
    }
}
