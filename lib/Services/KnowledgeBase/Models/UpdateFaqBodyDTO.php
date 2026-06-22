<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * UpdateFaqBodyDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class UpdateFaqBodyDTO
{
    /**
     * @var string
     */
    public string $question;

    /**
     * @var string
     */
    public string $answer;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->question = $data['question'] ?? '';
        $this->answer = $data['answer'] ?? '';
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
        if ($this->answer !== null) {
            $result['answer'] = $this->answer;
        }
        return $result;
    }
}
