<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * InitiateFileUploadResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class InitiateFileUploadResponseDto
{
    /**
     * @var string
     */
    public string $upload_url;

    /**
     * @var string
     */
    public string $upload_id;

    /**
     * @var string
     */
    public string $file_path;

    /**
     * @var float
     */
    public float $expires_at;

    /**
     * @var float
     */
    public float $max_file_size;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->upload_url = $data['uploadUrl'] ?? '';
        $this->upload_id = $data['uploadId'] ?? '';
        $this->file_path = $data['filePath'] ?? '';
        $this->expires_at = $data['expiresAt'] ?? 0;
        $this->max_file_size = $data['maxFileSize'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->upload_url !== null) {
            $result['uploadUrl'] = $this->upload_url;
        }
        if ($this->upload_id !== null) {
            $result['uploadId'] = $this->upload_id;
        }
        if ($this->file_path !== null) {
            $result['filePath'] = $this->file_path;
        }
        if ($this->expires_at !== null) {
            $result['expiresAt'] = $this->expires_at;
        }
        if ($this->max_file_size !== null) {
            $result['maxFileSize'] = $this->max_file_size;
        }
        return $result;
    }
}
