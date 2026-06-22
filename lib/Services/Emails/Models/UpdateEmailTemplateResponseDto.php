<?php

namespace HighLevel\Services\Emails\Models;

/**
 * UpdateEmailTemplateResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class UpdateEmailTemplateResponseDto
{
    /**
     * @var bool
     */
    public bool $ok;

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
    public string $builder_version;

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
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $last_updated;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var bool
     */
    public bool $is_plain_text;

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
        $this->ok = $data['ok'] ?? false;
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->archived = $data['archived'] ?? false;
        $this->builder_version = $data['builderVersion'] ?? '';
        $this->from_name = $data['fromName'] ?? '';
        $this->from_email = $data['fromEmail'] ?? '';
        $this->subject_line = $data['subjectLine'] ?? '';
        $this->preview_text = $data['previewText'] ?? '';
        $this->preview_url = $data['previewUrl'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->last_updated = $data['lastUpdated'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->is_plain_text = $data['isPlainText'] ?? false;
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
        if ($this->ok !== null) {
            $result['ok'] = $this->ok;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->archived !== null) {
            $result['archived'] = $this->archived;
        }
        if ($this->builder_version !== null) {
            $result['builderVersion'] = $this->builder_version;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->last_updated !== null) {
            $result['lastUpdated'] = $this->last_updated;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->field_defaults !== null) {
            $result['fieldDefaults'] = $this->field_defaults;
        }
        return $result;
    }
}
