<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CustomQuestionFieldDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CustomQuestionFieldDTO
{
    /**
     * @var string
     */
    public string $custom_question_text;

    /**
     * @var array&lt;string&gt;
     */
    public array $single_choice_answers;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->custom_question_text = $data['customQuestionText'] ?? '';
        $this->single_choice_answers = $data['singleChoiceAnswers'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->custom_question_text !== null) {
            $result['customQuestionText'] = $this->custom_question_text;
        }
        if ($this->single_choice_answers !== null) {
            $result['singleChoiceAnswers'] = $this->single_choice_answers;
        }
        return $result;
    }
}
