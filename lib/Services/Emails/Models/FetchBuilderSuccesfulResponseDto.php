<?php

namespace HighLevel\Services\Emails\Models;

/**
 * FetchBuilderSuccesfulResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class FetchBuilderSuccesfulResponseDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $updated_by = null;

    /**
     * @var bool|null
     */
    public ?bool $is_plain_text = null;

    /**
     * @var string|null
     */
    public ?string $last_updated = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $preview_url = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * @var string|null
     */
    public ?string $template_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->updated_by = $data['updatedBy'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->last_updated = $data['lastUpdated'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->preview_url = $data['previewUrl'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->template_type = $data['templateType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->last_updated !== null) {
            $result['lastUpdated'] = $this->last_updated;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->preview_url !== null) {
            $result['previewUrl'] = $this->preview_url;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->template_type !== null) {
            $result['templateType'] = $this->template_type;
        }
        return $result;
    }
}
