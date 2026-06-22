<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * BuilderUpdateSuccessfulDTO model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BuilderUpdateSuccessfulDTO
{
    /**
     * @var string|null
     */
    public ?string $ok = null;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * @var string|null
     */
    public ?string $preview_url = null;

    /**
     * @var string|null
     */
    public ?string $template_download_url = null;

    /**
     * @var string|null
     */
    public ?string $version_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->ok = $data['ok'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
        $this->preview_url = $data['previewUrl'] ?? null;
        $this->template_download_url = $data['templateDownloadUrl'] ?? null;
        $this->version_id = $data['versionId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->ok !== null) {
            $result['ok'] = $this->ok;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        if ($this->preview_url !== null) {
            $result['previewUrl'] = $this->preview_url;
        }
        if ($this->template_download_url !== null) {
            $result['templateDownloadUrl'] = $this->template_download_url;
        }
        if ($this->version_id !== null) {
            $result['versionId'] = $this->version_id;
        }
        return $result;
    }
}
