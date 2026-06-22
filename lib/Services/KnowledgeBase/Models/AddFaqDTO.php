<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * AddFaqDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class AddFaqDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $question;

    /**
     * @var string
     */
    public string $answer;

    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->question = $data['question'] ?? '';
        $this->answer = $data['answer'] ?? '';
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->question !== null) {
            $result['question'] = $this->question;
        }
        if ($this->answer !== null) {
            $result['answer'] = $this->answer;
        }
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        return $result;
    }
}
