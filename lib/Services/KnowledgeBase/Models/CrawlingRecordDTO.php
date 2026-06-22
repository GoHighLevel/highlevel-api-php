<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CrawlingRecordDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CrawlingRecordDTO
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var mixed
     */
    public $error;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->title = $data['title'] ?? null;
        $this->error = $data['error'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        return $result;
    }
}
