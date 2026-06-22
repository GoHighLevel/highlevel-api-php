<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * CompleteFileUploadResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class CompleteFileUploadResponseDto
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $uploaded_files;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $metadata;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->uploaded_files = $data['uploadedFiles'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
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
        if ($this->metadata !== null) {
            $result['metadata'] = $this->metadata;
        }
        return $result;
    }
}
