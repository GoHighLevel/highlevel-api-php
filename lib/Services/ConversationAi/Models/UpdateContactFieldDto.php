<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * updateContactFieldDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class UpdateContactFieldDto
{
    /**
     * @var string
     */
    public string $contact_field_id;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $contact_update_examples = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->contact_field_id = $data['contactFieldId'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->contact_update_examples = $data['contactUpdateExamples'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->contact_field_id !== null) {
            $result['contactFieldId'] = $this->contact_field_id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->contact_update_examples !== null) {
            $result['contactUpdateExamples'] = $this->contact_update_examples;
        }
        return $result;
    }
}
