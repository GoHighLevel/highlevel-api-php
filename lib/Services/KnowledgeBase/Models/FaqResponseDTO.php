<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * FaqResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class FaqResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $question;

    /**
     * @var string
     */
    public string $question_lower_case;

    /**
     * @var string
     */
    public string $answer;

    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $trained_url_id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->question = $data['question'] ?? '';
        $this->question_lower_case = $data['questionLowerCase'] ?? '';
        $this->answer = $data['answer'] ?? '';
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->trained_url_id = $data['trainedUrlId'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->question !== null) {
            $result['question'] = $this->question;
        }
        if ($this->question_lower_case !== null) {
            $result['questionLowerCase'] = $this->question_lower_case;
        }
        if ($this->answer !== null) {
            $result['answer'] = $this->answer;
        }
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->trained_url_id !== null) {
            $result['trainedUrlId'] = $this->trained_url_id;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
