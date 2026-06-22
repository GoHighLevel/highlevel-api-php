<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * UploadFilesResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UploadFilesResponseDto
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $uploaded_files;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $twilio_media_sids = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->uploaded_files = $data['uploadedFiles'] ?? null;
        $this->twilio_media_sids = $data['twilioMediaSids'] ?? null;
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
        if ($this->twilio_media_sids !== null) {
            $result['twilioMediaSids'] = $this->twilio_media_sids;
        }
        return $result;
    }
}
