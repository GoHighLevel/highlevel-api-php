<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * CompleteFileUploadDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class CompleteFileUploadDto
{
    /**
     * @var string
     */
    public string $upload_id;

    /**
     * @var string
     */
    public string $file_path;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $filename;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->upload_id = $data['uploadId'] ?? '';
        $this->file_path = $data['filePath'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->filename = $data['filename'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->upload_id !== null) {
            $result['uploadId'] = $this->upload_id;
        }
        if ($this->file_path !== null) {
            $result['filePath'] = $this->file_path;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        return $result;
    }
}
