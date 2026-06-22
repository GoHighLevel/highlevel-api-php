<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Medias\Models;

/**
 * UploadFileResponseDTO model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class UploadFileResponseDTO
{
    /**
     * @var string
     */
    public string $file_id;

    /**
     * @var string
     */
    public string $url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->file_id = $data['fileId'] ?? '';
        $this->url = $data['url'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->file_id !== null) {
            $result['fileId'] = $this->file_id;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }
}
