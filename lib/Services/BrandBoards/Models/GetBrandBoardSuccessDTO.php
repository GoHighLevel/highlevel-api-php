<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public $meta;

    /**
     * @var mixed
     */
    public $missing_assets;

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
        $this->missing_assets = $data['missingAssets'] ?? null;
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
            $result['_id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->logos !== null) {
            $result['logos'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->logos);
        }
        if ($this->colors !== null) {
            $result['colors'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->colors);
        }
        if ($this->fonts !== null) {
            $result['fonts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->fonts);
        }
        if ($this->default !== null) {
            $result['default'] = $this->default;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->folder_id !== null) {
            $result['folderId'] = $this->folder_id;
        }
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->missing_assets !== null) {
            $result['missingAssets'] = $this->missing_assets;
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
