<?php

namespace HighLevel\Services\Emails\Models;

/**
 * UpdateEmailTemplateDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class UpdateEmailTemplateDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $updated_by = null;

    /**
     * @var mixed
     */
    public $editor_content;

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
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var bool|null
     */
    public ?bool $archived = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $field_defaults = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->updated_by = $data['updatedBy'] ?? null;
        $this->editor_content = $data['editorContent'] ?? null;
        $this->editor_type = $data['editorType'] ?? null;
        $this->preview_text = $data['previewText'] ?? null;
        $this->subject_line = $data['subjectLine'] ?? null;
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->archived = $data['archived'] ?? null;
        $this->field_defaults = $data['fieldDefaults'] ?? null;
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
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->archived !== null) {
            $result['archived'] = $this->archived;
        }
        if ($this->field_defaults !== null) {
            $result['fieldDefaults'] = $this->field_defaults;
        }
        return $result;
    }
}
