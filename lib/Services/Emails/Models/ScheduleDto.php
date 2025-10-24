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
    public string $id;

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        $this->id = $data['_id'] ?? '';
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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
