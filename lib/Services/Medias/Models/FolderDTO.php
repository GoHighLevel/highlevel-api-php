<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Medias\Models;

/**
 * FolderDTO model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class FolderDTO
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var bool|null
     */
    public ?bool $pending_upload = null;

    /**
     * @var string|null
     */
    public ?string $category = null;

    /**
     * @var string|null
     */
    public ?string $sub_category = null;

    /**
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * @var bool|null
     */
    public ?bool $relocated_folder = null;

    /**
     * @var bool|null
     */
    public ?bool $migration_completed = null;

    /**
     * @var bool|null
     */
    public ?bool $app_folder = null;

    /**
     * @var bool|null
     */
    public ?bool $is_essential = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $last_updated_by = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->parent_id = $data['parentId'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->deleted = $data['deleted'] ?? null;
        $this->pending_upload = $data['pendingUpload'] ?? null;
        $this->category = $data['category'] ?? null;
        $this->sub_category = $data['subCategory'] ?? null;
        $this->is_private = $data['isPrivate'] ?? null;
        $this->relocated_folder = $data['relocatedFolder'] ?? null;
        $this->migration_completed = $data['migrationCompleted'] ?? null;
        $this->app_folder = $data['appFolder'] ?? null;
        $this->is_essential = $data['isEssential'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->last_updated_by = $data['lastUpdatedBy'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->pending_upload !== null) {
            $result['pendingUpload'] = $this->pending_upload;
        }
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        if ($this->sub_category !== null) {
            $result['subCategory'] = $this->sub_category;
        }
        if ($this->is_private !== null) {
            $result['isPrivate'] = $this->is_private;
        }
        if ($this->relocated_folder !== null) {
            $result['relocatedFolder'] = $this->relocated_folder;
        }
        if ($this->migration_completed !== null) {
            $result['migrationCompleted'] = $this->migration_completed;
        }
        if ($this->app_folder !== null) {
            $result['appFolder'] = $this->app_folder;
        }
        if ($this->is_essential !== null) {
            $result['isEssential'] = $this->is_essential;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->last_updated_by !== null) {
            $result['lastUpdatedBy'] = $this->last_updated_by;
        }
        return $result;
    }
}
