<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * CreateEmailCampaignPublicV2BodyDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class CreateEmailCampaignPublicV2BodyDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $editor_type;

    /**
     * @var string|null
     */
    public ?string $template_id = null;

    /**
     * @var string|null
     */
    public ?string $editor_content = null;

    /**
     * @var string|null
     */
    public ?string $parent_folder_id = null;

    /**
     * @var string
     */
    public string $time_zone;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var string|null
     */
    public ?string $user_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->editor_type = $data['editorType'] ?? '';
        $this->template_id = $data['templateId'] ?? null;
        $this->editor_content = $data['editorContent'] ?? null;
        $this->parent_folder_id = $data['parentFolderId'] ?? null;
        $this->time_zone = $data['timeZone'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->user_name = $data['userName'] ?? null;
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
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->editor_content !== null) {
            $result['editorContent'] = $this->editor_content;
        }
        if ($this->parent_folder_id !== null) {
            $result['parentFolderId'] = $this->parent_folder_id;
        }
        if ($this->time_zone !== null) {
            $result['timeZone'] = $this->time_zone;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->user_name !== null) {
            $result['userName'] = $this->user_name;
        }
        return $result;
    }
}
