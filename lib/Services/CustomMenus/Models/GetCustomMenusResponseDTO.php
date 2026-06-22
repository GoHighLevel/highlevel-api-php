<?php

namespace HighLevel\Services\CustomMenus\Models;

/**
 * GetCustomMenusResponseDTO model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class GetCustomMenusResponseDTO
{
    /**
     * @var array&lt;CustomMenuSchema&gt;|null
     */
    public ?array $custom_menus = null;

    /**
     * @var float|null
     */
    public ?float $total_links = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CustomMenuSchema objects
        if (isset($data['customMenus']) && is_array($data['customMenus'])) {
            $this->custom_menus = array_map(function($item) {
                return is_array($item) ? new CustomMenuSchema($item) : $item;
            }, $data['customMenus']);
        } else {
            $this->custom_menus = $data['customMenus'] ?? null;
        }
        $this->total_links = $data['totalLinks'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->custom_menus !== null) {
            $result['customMenus'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_menus);
        }
        if ($this->total_links !== null) {
            $result['totalLinks'] = $this->total_links;
        }
        return $result;
    }
}
