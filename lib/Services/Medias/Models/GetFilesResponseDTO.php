<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Medias\Models;

/**
 * GetFilesResponseDTO model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class GetFilesResponseDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $files;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->files = $data['files'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->files !== null) {
            $result['files'] = $this->files;
        }
        return $result;
    }
}
