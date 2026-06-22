<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * DiscoverWebsiteRequestDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class DiscoverWebsiteRequestDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $option;

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
        $this->url = $data['url'] ?? '';
        $this->option = $data['option'] ?? '';
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
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->option !== null) {
            $result['option'] = $this->option;
        }
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        return $result;
    }
}
