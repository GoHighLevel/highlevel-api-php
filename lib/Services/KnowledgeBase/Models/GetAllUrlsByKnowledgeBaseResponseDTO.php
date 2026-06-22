<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * GetAllUrlsByKnowledgeBaseResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class GetAllUrlsByKnowledgeBaseResponseDTO
{
    /**
     * @var float
     */
    public float $count;

    /**
     * @var array&lt;CrawledUrlDTO&gt;
     */
    public array $urls;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->count = $data['count'] ?? 0;
        // Handle array of CrawledUrlDTO objects
        if (isset($data['urls']) && is_array($data['urls'])) {
            $this->urls = array_map(function($item) {
                return is_array($item) ? new CrawledUrlDTO($item) : $item;
            }, $data['urls']);
        } else {
            $this->urls = $data['urls'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->urls !== null) {
            $result['urls'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->urls);
        }
        return $result;
    }
}
