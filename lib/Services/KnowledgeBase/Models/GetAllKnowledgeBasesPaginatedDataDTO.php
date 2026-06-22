<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * GetAllKnowledgeBasesPaginatedDataDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class GetAllKnowledgeBasesPaginatedDataDTO
{
    /**
     * @var array&lt;KnowledgeBaseListItemDTO&gt;
     */
    public array $knowledge_bases;

    /**
     * @var float
     */
    public float $active_count;

    /**
     * @var bool
     */
    public bool $has_more;

    /**
     * @var string|null
     */
    public ?string $last_knowledge_base_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of KnowledgeBaseListItemDTO objects
        if (isset($data['knowledgeBases']) && is_array($data['knowledgeBases'])) {
            $this->knowledge_bases = array_map(function($item) {
                return is_array($item) ? new KnowledgeBaseListItemDTO($item) : $item;
            }, $data['knowledgeBases']);
        } else {
            $this->knowledge_bases = $data['knowledgeBases'] ?? [];
        }
        $this->active_count = $data['activeCount'] ?? 0;
        $this->has_more = $data['hasMore'] ?? false;
        $this->last_knowledge_base_id = $data['lastKnowledgeBaseId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->knowledge_bases !== null) {
            $result['knowledgeBases'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->knowledge_bases);
        }
        if ($this->active_count !== null) {
            $result['activeCount'] = $this->active_count;
        }
        if ($this->has_more !== null) {
            $result['hasMore'] = $this->has_more;
        }
        if ($this->last_knowledge_base_id !== null) {
            $result['lastKnowledgeBaseId'] = $this->last_knowledge_base_id;
        }
        return $result;
    }
}
