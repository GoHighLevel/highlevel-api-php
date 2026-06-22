<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * BuilderEditorContentPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BuilderEditorContentPublicV2Dto
{
    /**
     * @var array&lt;BuilderElementNodePublicV2Dto&gt;|null
     */
    public ?array $elements = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $attrs = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $template_settings = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BuilderElementNodePublicV2Dto objects
        if (isset($data['elements']) && is_array($data['elements'])) {
            $this->elements = array_map(function($item) {
                return is_array($item) ? new BuilderElementNodePublicV2Dto($item) : $item;
            }, $data['elements']);
        } else {
            $this->elements = $data['elements'] ?? null;
        }
        $this->attrs = $data['attrs'] ?? null;
        $this->template_settings = $data['templateSettings'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->elements !== null) {
            $result['elements'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->elements);
        }
        if ($this->attrs !== null) {
            $result['attrs'] = $this->attrs;
        }
        if ($this->template_settings !== null) {
            $result['templateSettings'] = $this->template_settings;
        }
        return $result;
    }
}
