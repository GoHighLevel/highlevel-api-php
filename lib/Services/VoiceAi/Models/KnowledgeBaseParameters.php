<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * KnowledgeBaseParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class KnowledgeBaseParameters
{
    /**
     * @var string
     */
    public string $trigger_prompt;

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
        $this->trigger_prompt = $data['triggerPrompt'] ?? '';
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
        if ($this->trigger_prompt !== null) {
            $result['triggerPrompt'] = $this->trigger_prompt;
        }
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        return $result;
    }
}
