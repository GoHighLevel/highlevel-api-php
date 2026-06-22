<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LeadFormFieldDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LeadFormFieldDTO
{
    /**
     * @var string
     */
    public string $input_type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $single_choice_answers = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->input_type = $data['inputType'] ?? '';
        $this->single_choice_answers = $data['singleChoiceAnswers'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->input_type !== null) {
            $result['inputType'] = $this->input_type;
        }
        if ($this->single_choice_answers !== null) {
            $result['singleChoiceAnswers'] = $this->single_choice_answers;
        }
        return $result;
    }
}
