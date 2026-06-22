<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * QuestionDetailsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class QuestionDetailsDTO
{
    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $text_question_details = null;

    /**
     * @var mixed
     */
    public $multiple_choice_question_details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->text_question_details = $data['textQuestionDetails'] ?? null;
        $this->multiple_choice_question_details = $data['multipleChoiceQuestionDetails'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->text_question_details !== null) {
            $result['textQuestionDetails'] = $this->text_question_details;
        }
        if ($this->multiple_choice_question_details !== null) {
            $result['multipleChoiceQuestionDetails'] = $this->multiple_choice_question_details;
        }
        return $result;
    }
}
