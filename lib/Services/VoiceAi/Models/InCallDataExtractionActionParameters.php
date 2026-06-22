<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * InCallDataExtractionActionParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class InCallDataExtractionActionParameters
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
     * @var array&lt;string&gt;
     */
    public array $examples;

    /**
     * @var bool|null
     */
    public ?bool $overwrite_existing_value = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->contact_field_id = $data['contactFieldId'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->examples = $data['examples'] ?? [];
        $this->overwrite_existing_value = $data['overwriteExistingValue'] ?? null;
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
        if ($this->examples !== null) {
            $result['examples'] = $this->examples;
        }
        if ($this->overwrite_existing_value !== null) {
            $result['overwriteExistingValue'] = $this->overwrite_existing_value;
        }
        return $result;
    }
}
