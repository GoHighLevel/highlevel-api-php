<?php

namespace HighLevel\Services\Emails\Models;

/**
 * BuilderElementNodePublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BuilderElementNodePublicV2Dto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $tag_name;

    /**
     * @var array&lt;BuilderElementNodePublicV2Dto&gt;|null
     */
    public ?array $children = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->tag_name = $data['tagName'] ?? '';
        // Handle array of BuilderElementNodePublicV2Dto objects
        if (isset($data['children']) && is_array($data['children'])) {
            $this->children = array_map(function($item) {
                return is_array($item) ? new BuilderElementNodePublicV2Dto($item) : $item;
            }, $data['children']);
        } else {
            $this->children = $data['children'] ?? null;
        }
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
            $result['id'] = $this->id;
        }
        if ($this->tag_name !== null) {
            $result['tagName'] = $this->tag_name;
        }
        if ($this->children !== null) {
            $result['children'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->children);
        }
        return $result;
    }
}
