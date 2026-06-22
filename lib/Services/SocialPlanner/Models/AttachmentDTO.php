<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachmentDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachmentDTO
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->type = $data['type'] ?? '';
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
