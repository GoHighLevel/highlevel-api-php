<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CrawledUrlDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CrawledUrlDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $knowledge_base_id;

    /**
     * @var string
     */
    public string $content;

    /**
     * @var bool
     */
    public bool $content_edited_by_user;

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
        $this->url = $data['url'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->knowledge_base_id = $data['knowledgeBaseId'] ?? '';
        $this->content = $data['content'] ?? '';
        $this->content_edited_by_user = $data['contentEditedByUser'] ?? false;
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
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->knowledge_base_id !== null) {
            $result['knowledgeBaseId'] = $this->knowledge_base_id;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->content_edited_by_user !== null) {
            $result['contentEditedByUser'] = $this->content_edited_by_user;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
