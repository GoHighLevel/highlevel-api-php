<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleKeywordsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleKeywordsDTO
{
    /**
     * @var array&lt;GoogleKeywordItemDTO&gt;|null
     */
    public ?array $positives = null;

    /**
     * @var array&lt;GoogleKeywordItemDTO&gt;|null
     */
    public ?array $negatives = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GoogleKeywordItemDTO objects
        if (isset($data['positives']) && is_array($data['positives'])) {
            $this->positives = array_map(function($item) {
                return is_array($item) ? new GoogleKeywordItemDTO($item) : $item;
            }, $data['positives']);
        } else {
            $this->positives = $data['positives'] ?? null;
        }
        // Handle array of GoogleKeywordItemDTO objects
        if (isset($data['negatives']) && is_array($data['negatives'])) {
            $this->negatives = array_map(function($item) {
                return is_array($item) ? new GoogleKeywordItemDTO($item) : $item;
            }, $data['negatives']);
        } else {
            $this->negatives = $data['negatives'] ?? null;
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
        if ($this->positives !== null) {
            $result['positives'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->positives);
        }
        if ($this->negatives !== null) {
            $result['negatives'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->negatives);
        }
        return $result;
    }
}
