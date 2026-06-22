<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PostSuccessfulResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PostSuccessfulResponseSchema
{
    /**
     * @var array&lt;GetPostFormattedSchema&gt;|null
     */
    public ?array $posts = null;

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
        // Handle array of GetPostFormattedSchema objects
        if (isset($data['posts']) && is_array($data['posts'])) {
            $this->posts = array_map(function($item) {
                return is_array($item) ? new GetPostFormattedSchema($item) : $item;
            }, $data['posts']);
        } else {
            $this->posts = $data['posts'] ?? null;
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
        if ($this->posts !== null) {
            $result['posts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->posts);
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
