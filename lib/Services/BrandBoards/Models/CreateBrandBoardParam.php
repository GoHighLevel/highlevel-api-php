<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * CreateBrandBoardParam model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class CreateBrandBoardParam
{
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
     * @var bool|null
     */
    public ?bool $default = null;

    /**
     * @var string|null
     */
    public ?string $brand_board_id = null;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
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
        $this->default = $data['default'] ?? null;
        $this->brand_board_id = $data['brandBoardId'] ?? null;
        $this->parent_id = $data['parentId'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->url = $data['url'] ?? null;
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
        if ($this->brand_board_id !== null) {
            $result['brandBoardId'] = $this->brand_board_id;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }
}
