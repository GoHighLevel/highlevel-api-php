<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * FbSetDefaultPageBodyDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class FbSetDefaultPageBodyDTO
{
    /**
     * @var string
     */
    public string $page_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->page_id = $data['pageId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->page_id !== null) {
            $result['pageId'] = $this->page_id;
        }
        return $result;
    }
}
