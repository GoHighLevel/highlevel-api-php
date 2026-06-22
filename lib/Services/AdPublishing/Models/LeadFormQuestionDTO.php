<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LeadFormQuestionDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LeadFormQuestionDTO
{
    /**
     * @var mixed
     */
    public $question;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var mixed
     */
    public $question_details;

    /**
     * @var string|null
     */
    public ?string $predefined_field = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->question = $data['question'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->question_details = $data['questionDetails'] ?? null;
        $this->predefined_field = $data['predefinedField'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->question !== null) {
            $result['question'] = $this->question;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->question_details !== null) {
            $result['questionDetails'] = $this->question_details;
        }
        if ($this->predefined_field !== null) {
            $result['predefinedField'] = $this->predefined_field;
        }
        return $result;
    }
}
