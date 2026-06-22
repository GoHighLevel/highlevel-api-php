<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * BuilderCustomFlagsPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BuilderCustomFlagsPublicV2Dto
{
    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $layout_id = null;

    /**
     * @var string|null
     */
    public ?string $theme = null;

    /**
     * @var string|null
     */
    public ?string $social_element_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->layout_id = $data['layoutId'] ?? null;
        $this->theme = $data['theme'] ?? null;
        $this->social_element_type = $data['socialElementType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->layout_id !== null) {
            $result['layoutId'] = $this->layout_id;
        }
        if ($this->theme !== null) {
            $result['theme'] = $this->theme;
        }
        if ($this->social_element_type !== null) {
            $result['socialElementType'] = $this->social_element_type;
        }
        return $result;
    }
}
