<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * MultipleChoiceQuestionDetailsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class MultipleChoiceQuestionDetailsDTO
{
    /**
     * @var array&lt;MultipleChoiceOptionDTO&gt;
     */
    public array $options;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of MultipleChoiceOptionDTO objects
        if (isset($data['options']) && is_array($data['options'])) {
            $this->options = array_map(function($item) {
                return is_array($item) ? new MultipleChoiceOptionDTO($item) : $item;
            }, $data['options']);
        } else {
            $this->options = $data['options'] ?? [];
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
        if ($this->options !== null) {
            $result['options'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->options);
        }
        return $result;
    }
}
