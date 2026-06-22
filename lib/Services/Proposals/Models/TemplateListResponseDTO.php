<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * TemplateListResponseDTO model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class TemplateListResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var float
     */
    public float $version;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $updated_by;

    /**
     * @var bool
     */
    public bool $is_public_document;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var float|null
     */
    public ?float $document_count = null;

    /**
     * @var string|null
     */
    public ?string $doc_form_url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->version = $data['version'] ?? 0;
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->updated_by = $data['updatedBy'] ?? '';
        $this->is_public_document = $data['isPublicDocument'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->document_count = $data['documentCount'] ?? null;
        $this->doc_form_url = $data['docFormUrl'] ?? null;
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
            $result['_id'] = $this->id;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
        }
        if ($this->is_public_document !== null) {
            $result['isPublicDocument'] = $this->is_public_document;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->document_count !== null) {
            $result['documentCount'] = $this->document_count;
        }
        if ($this->doc_form_url !== null) {
            $result['docFormUrl'] = $this->doc_form_url;
        }
        return $result;
    }
}
