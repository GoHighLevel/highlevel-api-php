<?php

namespace HighLevel\Services\Emails\Models;

/**
 * WorkflowCampaignSubSourcePublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class WorkflowCampaignSubSourcePublicV2Dto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $subject = null;

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
    public ?string $preview_text = null;

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
    public ?string $editor_content_url = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->subject = $data['subject'] ?? null;
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->preview_text = $data['previewText'] ?? null;
        $this->editor_type = $data['editorType'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->editor_content_url = $data['editorContentUrl'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
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
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->preview_text !== null) {
            $result['previewText'] = $this->preview_text;
        }
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->editor_content_url !== null) {
            $result['editorContentUrl'] = $this->editor_content_url;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
