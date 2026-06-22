<?php

namespace HighLevel\Services\Locations\Models;

/**
 * FileUploadResponseDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class FileUploadResponseDto
{
    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $uploaded_files = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->uploaded_files = $data['uploadedFiles'] ?? null;
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->uploaded_files !== null) {
            $result['uploadedFiles'] = $this->uploaded_files;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
