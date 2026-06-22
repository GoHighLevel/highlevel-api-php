<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Blogs\Models;

/**
 * BlogPostGetResponseWrapperDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class BlogPostGetResponseWrapperDTO
{
    /**
     * @var array&lt;BlogPostResponseDTO&gt;
     */
    public array $blogs;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of BlogPostResponseDTO objects
        if (isset($data['blogs']) && is_array($data['blogs'])) {
            $this->blogs = array_map(function($item) {
                return is_array($item) ? new BlogPostResponseDTO($item) : $item;
            }, $data['blogs']);
        } else {
            $this->blogs = $data['blogs'] ?? [];
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
        if ($this->blogs !== null) {
            $result['blogs'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->blogs);
        }
        return $result;
    }
}
