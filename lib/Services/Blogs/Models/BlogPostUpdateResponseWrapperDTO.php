<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Blogs\Models;

/**
 * BlogPostUpdateResponseWrapperDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class BlogPostUpdateResponseWrapperDTO
{
    /**
     * @var BlogPostResponseDTO
     */
    public BlogPostResponseDTO $updated_blog_post;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single BlogPostResponseDTO object
        if (isset($data['updatedBlogPost']) && is_array($data['updatedBlogPost'])) {
            $this->updated_blog_post = new BlogPostResponseDTO($data['updatedBlogPost']);
        } else {
            $this->updated_blog_post = $data['updatedBlogPost'] ?? null;
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
        if ($this->updated_blog_post !== null) {
            $result['updatedBlogPost'] = is_object($this->updated_blog_post) && method_exists($this->updated_blog_post, 'toArray') 
                ? $this->updated_blog_post->toArray() 
                : $this->updated_blog_post;
        }
        return $result;
    }
}
