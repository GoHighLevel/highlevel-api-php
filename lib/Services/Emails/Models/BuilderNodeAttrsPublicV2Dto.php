<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * BuilderNodeAttrsPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BuilderNodeAttrsPublicV2Dto
{
    /**
     * @var string
     */
    public string $tag_name;

    /**
     * @var array&lt;BuilderAttributePublicV2Dto&gt;
     */
    public array $attributes;

    /**
     * @var string|null
     */
    public ?string $content = null;

    /**
     * @var mixed
     */
    public $custom_flags;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tag_name = $data['tagName'] ?? '';
        // Handle array of BuilderAttributePublicV2Dto objects
        if (isset($data['attributes']) && is_array($data['attributes'])) {
            $this->attributes = array_map(function($item) {
                return is_array($item) ? new BuilderAttributePublicV2Dto($item) : $item;
            }, $data['attributes']);
        } else {
            $this->attributes = $data['attributes'] ?? [];
        }
        $this->content = $data['content'] ?? null;
        $this->custom_flags = $data['customFlags'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tag_name !== null) {
            $result['tagName'] = $this->tag_name;
        }
        if ($this->attributes !== null) {
            $result['attributes'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attributes);
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->custom_flags !== null) {
            $result['customFlags'] = $this->custom_flags;
        }
        return $result;
    }
}
