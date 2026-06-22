<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetTagsByIdResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetTagsByIdResponseSchema
{
    /**
     * @var array&lt;SocialMediaTagSchema&gt;
     */
    public array $tags;

    /**
     * @var float|null
     */
    public ?float $count = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SocialMediaTagSchema objects
        if (isset($data['tags']) && is_array($data['tags'])) {
            $this->tags = array_map(function($item) {
                return is_array($item) ? new SocialMediaTagSchema($item) : $item;
            }, $data['tags']);
        } else {
            $this->tags = $data['tags'] ?? [];
        }
        $this->count = $data['count'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tags !== null) {
            $result['tags'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->tags);
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
