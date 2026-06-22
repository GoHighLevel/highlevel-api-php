<?php

namespace HighLevel\Services\Emails\Models;

/**
 * GetBulkActionCampaignPublicV2ResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class GetBulkActionCampaignPublicV2ResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $source_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string|null
     */
    public ?string $schedule_type = null;

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
    public ?string $subject = null;

    /**
     * @var string|null
     */
    public ?string $reply_to_address = null;

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
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string|null
     */
    public ?string $completed_at = null;

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
        $this->source = $data['source'] ?? null;
        $this->source_id = $data['sourceId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->schedule_type = $data['scheduleType'] ?? null;
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->subject = $data['subject'] ?? null;
        $this->reply_to_address = $data['replyToAddress'] ?? null;
        $this->preview_text = $data['previewText'] ?? null;
        $this->editor_type = $data['editorType'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->editor_content_url = $data['editorContentUrl'] ?? null;
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->completed_at = $data['completedAt'] ?? null;
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
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->schedule_type !== null) {
            $result['scheduleType'] = $this->schedule_type;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->reply_to_address !== null) {
            $result['replyToAddress'] = $this->reply_to_address;
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
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->completed_at !== null) {
            $result['completedAt'] = $this->completed_at;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
