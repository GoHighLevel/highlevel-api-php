<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * IBuilderJsonMapper model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class IBuilderJsonMapper
{
    /**
     * @var array&lt;string&gt;
     */
    public array $elements;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $attrs;

    /**
     * @var mixed
     */
    public $template_settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->elements = $data['elements'] ?? [];
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
            $result['elements'] = $this->elements;
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
