<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * DeleteWebsiteUrlRequestDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class DeleteWebsiteUrlRequestDTO
{
    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $url_ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->url_ids = $data['urlIds'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->url_ids !== null) {
            $result['urlIds'] = $this->url_ids;
        }
        return $result;
    }
}
