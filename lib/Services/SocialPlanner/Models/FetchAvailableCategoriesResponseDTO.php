<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchAvailableCategoriesResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchAvailableCategoriesResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;AvailableCategoryDTO&gt;|null
     */
    public ?array $categories = null;

    /**
     * @var MetaDTO|null
     */
    public ?MetaDTO $meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        // Handle array of AvailableCategoryDTO objects
        if (isset($data['categories']) && is_array($data['categories'])) {
            $this->categories = array_map(function($item) {
                return is_array($item) ? new AvailableCategoryDTO($item) : $item;
            }, $data['categories']);
        } else {
            $this->categories = $data['categories'] ?? null;
        }
        // Handle single MetaDTO object
        if (isset($data['meta']) && is_array($data['meta'])) {
            $this->meta = new MetaDTO($data['meta']);
        } else {
            $this->meta = $data['meta'] ?? null;
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
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->categories !== null) {
            $result['categories'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->categories);
        }
        if ($this->meta !== null) {
            $result['meta'] = is_object($this->meta) && method_exists($this->meta, 'toArray') 
                ? $this->meta->toArray() 
                : $this->meta;
        }
        return $result;
    }
}
