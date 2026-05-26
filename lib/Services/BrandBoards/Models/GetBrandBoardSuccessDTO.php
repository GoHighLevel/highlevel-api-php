<?php

namespace HighLevel\Services\BrandBoards\Models;

/**
 * GetBrandBoardSuccessDTO model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class GetBrandBoardSuccessDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var array&lt;Logo&gt;|null
     */
    public ?array $logos = null;

    /**
     * @var array&lt;Color&gt;|null
     */
    public ?array $colors = null;

    /**
     * @var array&lt;Font&gt;|null
     */
    public ?array $fonts = null;

    /**
     * @var bool
     */
    public bool $default;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * @var string|null
     */
    public ?string $folder_id = null;

    /**
     * @var string|null
     */
    public ?string $origin_id = null;

    /**
     * @var mixed
     */
    public mixed $meta;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

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
        $this->id = $data['_id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        // Handle array of Logo objects
        if (isset($data['logos']) && is_array($data['logos'])) {
            $this->logos = array_map(function($item) {
                return is_array($item) ? new Logo($item) : $item;
            }, $data['logos']);
        } else {
            $this->logos = $data['logos'] ?? null;
        }
        // Handle array of Color objects
        if (isset($data['colors']) && is_array($data['colors'])) {
            $this->colors = array_map(function($item) {
                return is_array($item) ? new Color($item) : $item;
            }, $data['colors']);
        } else {
            $this->colors = $data['colors'] ?? null;
        }
        // Handle array of Font objects
        if (isset($data['fonts']) && is_array($data['fonts'])) {
            $this->fonts = array_map(function($item) {
                return is_array($item) ? new Font($item) : $item;
            }, $data['fonts']);
        } else {
            $this->fonts = $data['fonts'] ?? null;
        }
        $this->default = $data['default'] ?? false;
        $this->deleted = $data['deleted'] ?? false;
        $this->parent_id = $data['parentId'] ?? null;
        $this->folder_id = $data['folderId'] ?? null;
        $this->origin_id = $data['originId'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
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
