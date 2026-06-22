<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ImportTemplatePublicV2BodyDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ImportTemplatePublicV2BodyDto
{
    /**
     * @var string
     */
    public string $import_provider;

    /**
     * @var string
     */
    public string $import_url;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $parent_folder_id = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->import_provider = $data['importProvider'] ?? '';
        $this->import_url = $data['importUrl'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->parent_folder_id = $data['parentFolderId'] ?? null;
        $this->user_id = $data['userId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->import_provider !== null) {
            $result['importProvider'] = $this->import_provider;
        }
        if ($this->import_url !== null) {
            $result['importUrl'] = $this->import_url;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->parent_folder_id !== null) {
            $result['parentFolderId'] = $this->parent_folder_id;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        return $result;
    }
}
