<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * TrainDiscoveredUrlsDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class TrainDiscoveredUrlsDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $url_ids;

    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * @var string
     */
    public string $operation_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->url_ids = $data['urlIds'] ?? [];
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
        $this->operation_id = $data['operationId'] ?? '';
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
        if ($this->url_ids !== null) {
            $result['urlIds'] = $this->url_ids;
        }
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        if ($this->operation_id !== null) {
            $result['operationId'] = $this->operation_id;
        }
        return $result;
    }
}
