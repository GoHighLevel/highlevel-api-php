<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * InitiateFileUploadDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class InitiateFileUploadDto
{
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
     * @var string
     */
    public string $content_type;

    /**
     * @var float|null
     */
    public ?float $file_size = null;

    /**
     * @var string
     */
    public string $channel;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->filename = $data['filename'] ?? '';
        $this->content_type = $data['contentType'] ?? '';
        $this->file_size = $data['fileSize'] ?? null;
        $this->channel = $data['channel'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->content_type !== null) {
            $result['contentType'] = $this->content_type;
        }
        if ($this->file_size !== null) {
            $result['fileSize'] = $this->file_size;
        }
        if ($this->channel !== null) {
            $result['channel'] = $this->channel;
        }
        return $result;
    }
}
