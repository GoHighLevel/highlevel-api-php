<?php

namespace HighLevel\Services\Emails\Models;

/**
 * UpdateTemplatePublicV2BodyDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class UpdateTemplatePublicV2BodyDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $editor_content = null;

    /**
     * @var string|null
     */
    public ?string $editor_type = null;

    /**
     * @var string|null
     */
    public ?string $preview_text = null;

    /**
     * @var string|null
     */
    public ?string $subject_line = null;

    /**
     * @var string|null
     */
    public ?string $from_name = null;

    /**
     * @var string|null
     */
    public ?string $from_email = null;

    /**
     * @var bool|null
     */
    public ?bool $archived = null;

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
        $this->name = $data['name'] ?? null;
        $this->editor_content = $data['editorContent'] ?? null;
        $this->editor_type = $data['editorType'] ?? null;
        $this->preview_text = $data['previewText'] ?? null;
        $this->subject_line = $data['subjectLine'] ?? null;
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->archived = $data['archived'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->editor_content !== null) {
            $result['editorContent'] = $this->editor_content;
        }
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->preview_text !== null) {
            $result['previewText'] = $this->preview_text;
        }
        if ($this->subject_line !== null) {
            $result['subjectLine'] = $this->subject_line;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->archived !== null) {
            $result['archived'] = $this->archived;
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
