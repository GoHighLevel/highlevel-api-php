<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $repeat_after;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $parent_id;

    /**
     * @var float
     */
    public float $child_count;

    /**
     * @var string
     */
    public string $campaign_type;

    /**
     * @var string
     */
    public string $bulk_action_version;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var array&lt;string&gt;
     */
    public array $send_days;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var bool
     */
    public bool $migrated;

    /**
     * @var bool
     */
    public bool $archived;

    /**
     * @var bool
     */
    public bool $has_tracking;

    /**
     * @var bool
     */
    public bool $is_plain_text;

    /**
     * @var bool
     */
    public bool $has_utm_tracking;

    /**
     * @var bool
     */
    public bool $enable_resend_to_unopened;

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
    public string $template_type;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var float
     */
    public float $_v;

    /**
     * @var string
     */
    public string $document_id;

    /**
     * @var string
     */
    public string $download_url;

    /**
     * @var string
     */
    public string $template_data_download_url;

    /**
     * @var array&lt;string&gt;
     */
    public array $child;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->repeat_after = $data['repeatAfter'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->parent_id = $data['parentId'] ?? '';
        $this->child_count = $data['childCount'] ?? 0;
        $this->campaign_type = $data['campaignType'] ?? '';
        $this->bulk_action_version = $data['bulkActionVersion'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->send_days = $data['sendDays'] ?? [];
        $this->deleted = $data['deleted'] ?? false;
        $this->migrated = $data['migrated'] ?? false;
        $this->archived = $data['archived'] ?? false;
        $this->has_tracking = $data['hasTracking'] ?? false;
        $this->is_plain_text = $data['isPlainText'] ?? false;
        $this->has_utm_tracking = $data['hasUtmTracking'] ?? false;
        $this->enable_resend_to_unopened = $data['enableResendToUnopened'] ?? false;
        $this->location_id = $data['locationId'] ?? '';
        $this->template_id = $data['templateId'] ?? '';
        $this->template_type = $data['templateType'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->_v = $data['__v'] ?? 0;
        $this->document_id = $data['documentId'] ?? '';
        $this->download_url = $data['downloadUrl'] ?? '';
        $this->template_data_download_url = $data['templateDataDownloadUrl'] ?? '';
        $this->child = $data['child'] ?? [];
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
        if ($this->repeat_after !== null) {
            $result['repeatAfter'] = $this->repeat_after;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->child_count !== null) {
            $result['childCount'] = $this->child_count;
        }
        if ($this->campaign_type !== null) {
            $result['campaignType'] = $this->campaign_type;
        }
        if ($this->bulk_action_version !== null) {
            $result['bulkActionVersion'] = $this->bulk_action_version;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->send_days !== null) {
            $result['sendDays'] = $this->send_days;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->migrated !== null) {
            $result['migrated'] = $this->migrated;
        }
        if ($this->archived !== null) {
            $result['archived'] = $this->archived;
        }
        if ($this->has_tracking !== null) {
            $result['hasTracking'] = $this->has_tracking;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
        }
        if ($this->has_utm_tracking !== null) {
            $result['hasUtmTracking'] = $this->has_utm_tracking;
        }
        if ($this->enable_resend_to_unopened !== null) {
            $result['enableResendToUnopened'] = $this->enable_resend_to_unopened;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->template_type !== null) {
            $result['templateType'] = $this->template_type;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->_v !== null) {
            $result['__v'] = $this->_v;
        }
        if ($this->document_id !== null) {
            $result['documentId'] = $this->document_id;
        }
        if ($this->download_url !== null) {
            $result['downloadUrl'] = $this->download_url;
        }
        if ($this->template_data_download_url !== null) {
            $result['templateDataDownloadUrl'] = $this->template_data_download_url;
        }
        if ($this->child !== null) {
            $result['child'] = $this->child;
        }
        return $result;
    }
}
