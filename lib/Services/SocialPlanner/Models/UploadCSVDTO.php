<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * UploadCSVDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class UploadCSVDTO
{
    /**
     * @var string|null
     */
    public ?string $file = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->file = $data['file'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        return $result;
    }
}
