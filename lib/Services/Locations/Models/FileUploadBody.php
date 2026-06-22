<?php

namespace HighLevel\Services\Locations\Models;

/**
 * FileUploadBody model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class FileUploadBody
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $max_files = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->max_files = $data['maxFiles'] ?? null;
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
        if ($this->max_files !== null) {
            $result['maxFiles'] = $this->max_files;
        }
        return $result;
    }
}
