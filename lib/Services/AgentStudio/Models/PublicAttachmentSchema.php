<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * PublicAttachmentSchema model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class PublicAttachmentSchema
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $image_url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        return $result;
    }
}
