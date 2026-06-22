<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * CreateBuilderDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class CreateBuilderDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $updated_by = null;

    /**
     * @var string|null
     */
    public ?string $builder_version = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * @var string|null
     */
    public ?string $template_data_url = null;

    /**
     * @var string
     */
    public string $import_provider;

    /**
     * @var string|null
     */
    public ?string $import_u_r_l = null;

    /**
     * @var string|null
     */
    public ?string $template_source = null;

    /**
     * @var bool|null
     */
    public ?bool $is_plain_text = null;

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
    public ?string $preview_text = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->title = $data['title'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->updated_by = $data['updatedBy'] ?? null;
        $this->builder_version = $data['builderVersion'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->parent_id = $data['parentId'] ?? null;
        $this->template_data_url = $data['templateDataUrl'] ?? null;
        $this->import_provider = $data['importProvider'] ?? '';
        $this->import_u_r_l = $data['importURL'] ?? null;
        $this->template_source = $data['templateSource'] ?? null;
        $this->is_plain_text = $data['isPlainText'] ?? null;
        $this->subject_line = $data['subjectLine'] ?? null;
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->preview_text = $data['previewText'] ?? null;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
        }
        if ($this->builder_version !== null) {
            $result['builderVersion'] = $this->builder_version;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->template_data_url !== null) {
            $result['templateDataUrl'] = $this->template_data_url;
        }
        if ($this->import_provider !== null) {
            $result['importProvider'] = $this->import_provider;
        }
        if ($this->import_u_r_l !== null) {
            $result['importURL'] = $this->import_u_r_l;
        }
        if ($this->template_source !== null) {
            $result['templateSource'] = $this->template_source;
        }
        if ($this->is_plain_text !== null) {
            $result['isPlainText'] = $this->is_plain_text;
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
        if ($this->preview_text !== null) {
            $result['previewText'] = $this->preview_text;
        }
        return $result;
    }
}
