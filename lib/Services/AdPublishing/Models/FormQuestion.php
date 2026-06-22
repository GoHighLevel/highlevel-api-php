<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * FormQuestion model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class FormQuestion
{
    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @var string
     */
    public string $key;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;FormQuestionOption&gt;|null
     */
    public ?array $options = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->label = $data['label'] ?? null;
        $this->key = $data['key'] ?? '';
        $this->type = $data['type'] ?? '';
        // Handle array of FormQuestionOption objects
        if (isset($data['options']) && is_array($data['options'])) {
            $this->options = array_map(function($item) {
                return is_array($item) ? new FormQuestionOption($item) : $item;
            }, $data['options']);
        } else {
            $this->options = $data['options'] ?? null;
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
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->options !== null) {
            $result['options'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->options);
        }
        return $result;
    }
}
