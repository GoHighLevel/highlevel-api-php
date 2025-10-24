<?php

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
