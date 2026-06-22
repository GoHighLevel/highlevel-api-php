<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * TemplateListItemPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class TemplateListItemPublicV2Dto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var bool|null
     */
    public ?bool $is_plain_text = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $preview_url = null;

    /**
     * @var string|null
     */
    public ?string $editor_type = null;

    /**
     * @var float|null
     */
    public ?float $child_count = null;

    /**
     * @var bool|null
     */
    public ?bool $has_children = null;

    /**
     * @var string|null
     */
    public ?string $parent_folder_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->preview_url = $data['previewUrl'] ?? null;
        $this->editor_type = $data['editorType'] ?? null;
        $this->child_count = $data['childCount'] ?? null;
        $this->has_children = $data['hasChildren'] ?? null;
        $this->parent_folder_id = $data['parentFolderId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->preview_url !== null) {
            $result['previewUrl'] = $this->preview_url;
        }
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->child_count !== null) {
            $result['childCount'] = $this->child_count;
        }
        if ($this->has_children !== null) {
            $result['hasChildren'] = $this->has_children;
        }
        if ($this->parent_folder_id !== null) {
            $result['parentFolderId'] = $this->parent_folder_id;
        }
        return $result;
    }
}
