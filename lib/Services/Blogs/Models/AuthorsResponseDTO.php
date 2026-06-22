<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * AuthorsResponseDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class AuthorsResponseDTO
{
    /**
     * @var array&lt;AuthorResponseDTO&gt;
     */
    public array $authors;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of AuthorResponseDTO objects
        if (isset($data['authors']) && is_array($data['authors'])) {
            $this->authors = array_map(function($item) {
                return is_array($item) ? new AuthorResponseDTO($item) : $item;
            }, $data['authors']);
        } else {
            $this->authors = $data['authors'] ?? [];
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
        if ($this->authors !== null) {
            $result['authors'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->authors);
        }
        return $result;
    }
}
