<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LinkedInCreateLeadFormBodyDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LinkedInCreateLeadFormBodyDTO
{
    /**
     * @var mixed
     */
    public $owner;

    /**
     * @var mixed
     */
    public $creation_locale;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $state;

    /**
     * @var mixed
     */
    public $content;

    /**
     * @var array&lt;HiddenFieldDTO&gt;|null
     */
    public ?array $hidden_fields = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->owner = $data['owner'] ?? null;
        $this->creation_locale = $data['creationLocale'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->state = $data['state'] ?? '';
        $this->content = $data['content'] ?? null;
        // Handle array of HiddenFieldDTO objects
        if (isset($data['hiddenFields']) && is_array($data['hiddenFields'])) {
            $this->hidden_fields = array_map(function($item) {
                return is_array($item) ? new HiddenFieldDTO($item) : $item;
            }, $data['hiddenFields']);
        } else {
            $this->hidden_fields = $data['hiddenFields'] ?? null;
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
        if ($this->owner !== null) {
            $result['owner'] = $this->owner;
        }
        if ($this->creation_locale !== null) {
            $result['creationLocale'] = $this->creation_locale;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->hidden_fields !== null) {
            $result['hiddenFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->hidden_fields);
        }
        return $result;
    }
}
