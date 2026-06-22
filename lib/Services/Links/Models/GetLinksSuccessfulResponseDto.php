<?php

namespace HighLevel\Services\Links\Models;

/**
 * GetLinksSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Links\Models
 */
class GetLinksSuccessfulResponseDto
{
    /**
     * @var array&lt;LinkSchema&gt;|null
     */
    public ?array $links = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of LinkSchema objects
        if (isset($data['links']) && is_array($data['links'])) {
            $this->links = array_map(function($item) {
                return is_array($item) ? new LinkSchema($item) : $item;
            }, $data['links']);
        } else {
            $this->links = $data['links'] ?? null;
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
        if ($this->links !== null) {
            $result['links'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->links);
        }
        return $result;
    }
}
