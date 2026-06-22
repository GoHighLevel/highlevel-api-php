<?php

namespace HighLevel\Services\Blogs\Models;

/**
 * BlogPostCreateResponseWrapperDTO model
 * 
 * @package HighLevel\Services\Blogs\Models
 */
class BlogPostCreateResponseWrapperDTO
{
    /**
     * @var BlogPostResponseDTO
     */
    public BlogPostResponseDTO $data;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single BlogPostResponseDTO object
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = new BlogPostResponseDTO($data['data']);
        } else {
            $this->data = $data['data'] ?? null;
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
        if ($this->data !== null) {
            $result['data'] = is_object($this->data) && method_exists($this->data, 'toArray') 
                ? $this->data->toArray() 
                : $this->data;
        }
        return $result;
    }
}
