<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CustomDisclaimer model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CustomDisclaimer
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $body;

    /**
     * @var array&lt;CustomDisclaimerCheckbox&gt;|null
     */
    public ?array $checkboxes = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? '';
        $this->body = $data['body'] ?? '';
        // Handle array of CustomDisclaimerCheckbox objects
        if (isset($data['checkboxes']) && is_array($data['checkboxes'])) {
            $this->checkboxes = array_map(function($item) {
                return is_array($item) ? new CustomDisclaimerCheckbox($item) : $item;
            }, $data['checkboxes']);
        } else {
            $this->checkboxes = $data['checkboxes'] ?? null;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->checkboxes !== null) {
            $result['checkboxes'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->checkboxes);
        }
        return $result;
    }
}
