<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * KnowledgeBaseMetadataDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class KnowledgeBaseMetadataDTO
{
    /**
     * @var float
     */
    public float $faqs;

    /**
     * @var float
     */
    public float $urls;

    /**
     * @var float
     */
    public float $rich_text;

    /**
     * @var float
     */
    public float $files;

    /**
     * @var float
     */
    public float $web_searches;

    /**
     * @var float
     */
    public float $tables;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->faqs = $data['faqs'] ?? 0;
        $this->urls = $data['urls'] ?? 0;
        $this->rich_text = $data['richText'] ?? 0;
        $this->files = $data['files'] ?? 0;
        $this->web_searches = $data['webSearches'] ?? 0;
        $this->tables = $data['tables'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->faqs !== null) {
            $result['faqs'] = $this->faqs;
        }
        if ($this->urls !== null) {
            $result['urls'] = $this->urls;
        }
        if ($this->rich_text !== null) {
            $result['richText'] = $this->rich_text;
        }
        if ($this->files !== null) {
            $result['files'] = $this->files;
        }
        if ($this->web_searches !== null) {
            $result['webSearches'] = $this->web_searches;
        }
        if ($this->tables !== null) {
            $result['tables'] = $this->tables;
        }
        return $result;
    }
}
