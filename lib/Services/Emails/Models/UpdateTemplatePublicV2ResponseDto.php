<?php

namespace HighLevel\Services\Emails\Models;

/**
 * UpdateTemplatePublicV2ResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class UpdateTemplatePublicV2ResponseDto
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
     * @var bool
     */
    public bool $archived;

    /**
     * @var string
     */
    public string $from_name;

    /**
     * @var string
     */
    public string $from_email;

    /**
     * @var string
     */
    public string $subject_line;

    /**
     * @var string
     */
    public string $preview_text;

    /**
     * @var string
     */
    public string $preview_url;

    /**
     * @var string|null
     */
    public ?string $editor_type = null;

    /**
     * @var bool|null
     */
    public ?bool $is_plain_text = null;

    /**
     * @var string|null
     */
    public ?string $parent_folder_id = null;

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
    public ?string $trace_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->archived = $data['archived'] ?? false;
        $this->from_name = $data['fromName'] ?? '';
        $this->from_email = $data['fromEmail'] ?? '';
        $this->subject_line = $data['subjectLine'] ?? '';
        $this->preview_text = $data['previewText'] ?? '';
        $this->preview_url = $data['previewUrl'] ?? '';
        $this->editor_type = $data['editorType'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->parent_folder_id = $data['parentFolderId'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
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
        if ($this->archived !== null) {
            $result['archived'] = $this->archived;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->subject_line !== null) {
            $result['subjectLine'] = $this->subject_line;
        }
        if ($this->preview_text !== null) {
            $result['previewText'] = $this->preview_text;
        }
        if ($this->preview_url !== null) {
            $result['previewUrl'] = $this->preview_url;
        }
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->parent_folder_id !== null) {
            $result['parentFolderId'] = $this->parent_folder_id;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
