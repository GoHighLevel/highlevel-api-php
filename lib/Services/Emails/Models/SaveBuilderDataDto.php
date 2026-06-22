<?php

namespace HighLevel\Services\Emails\Models;

/**
 * SaveBuilderDataDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class SaveBuilderDataDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $template_id;

    /**
     * @var string
     */
    public string $updated_by;

    /**
     * @var mixed
     */
    public $dnd;

    /**
     * @var string
     */
    public string $html;

    /**
     * @var string
     */
    public string $editor_type;

    /**
     * @var string|null
     */
    public ?string $preview_text = null;

    /**
     * @var bool|null
     */
    public ?bool $is_plain_text = null;

    /**
     * @var bool|null
     */
    public ?bool $used_email_a_i = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->template_id = $data['templateId'] ?? '';
        $this->updated_by = $data['updatedBy'] ?? '';
        $this->dnd = $data['dnd'] ?? null;
        $this->html = $data['html'] ?? '';
        $this->editor_type = $data['editorType'] ?? '';
        $this->preview_text = $data['previewText'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->used_email_a_i = $data['usedEmailAI'] ?? null;
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
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
        }
        if ($this->dnd !== null) {
            $result['dnd'] = $this->dnd;
        }
        if ($this->html !== null) {
            $result['html'] = $this->html;
        }
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->preview_text !== null) {
            $result['previewText'] = $this->preview_text;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->used_email_a_i !== null) {
            $result['usedEmailAI'] = $this->used_email_a_i;
        }
        return $result;
    }
}
