<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LeadFormContentDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LeadFormContentDTO
{
    /**
     * @var array&lt;LeadFormQuestionDTO&gt;
     */
    public array $questions;

    /**
     * @var mixed
     */
    public $description;

    /**
     * @var mixed
     */
    public $headline;

    /**
     * @var mixed
     */
    public $post_submission_info;

    /**
     * @var mixed
     */
    public $legal_info;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of LeadFormQuestionDTO objects
        if (isset($data['questions']) && is_array($data['questions'])) {
            $this->questions = array_map(function($item) {
                return is_array($item) ? new LeadFormQuestionDTO($item) : $item;
            }, $data['questions']);
        } else {
            $this->questions = $data['questions'] ?? [];
        }
        $this->description = $data['description'] ?? null;
        $this->headline = $data['headline'] ?? null;
        $this->post_submission_info = $data['postSubmissionInfo'] ?? null;
        $this->legal_info = $data['legalInfo'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->questions !== null) {
            $result['questions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->questions);
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->post_submission_info !== null) {
            $result['postSubmissionInfo'] = $this->post_submission_info;
        }
        if ($this->legal_info !== null) {
            $result['legalInfo'] = $this->legal_info;
        }
        return $result;
    }
}
