<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * DiscoverWebsiteDataDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class DiscoverWebsiteDataDTO
{
    /**
     * @var string
     */
    public string $operation_id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->operation_id = $data['operationId'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->url = $data['url'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->operation_id !== null) {
            $result['operationId'] = $this->operation_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }
}
