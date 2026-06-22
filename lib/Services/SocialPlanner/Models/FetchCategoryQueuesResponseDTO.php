<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchCategoryQueuesResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchCategoryQueuesResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;CategoryQueueWithCategoryDTO&gt;|null
     */
    public ?array $queues = null;

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
        // Handle array of CategoryQueueWithCategoryDTO objects
        if (isset($data['queues']) && is_array($data['queues'])) {
            $this->queues = array_map(function($item) {
                return is_array($item) ? new CategoryQueueWithCategoryDTO($item) : $item;
            }, $data['queues']);
        } else {
            $this->queues = $data['queues'] ?? null;
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
        if ($this->queues !== null) {
            $result['queues'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->queues);
        }
        if ($this->meta !== null) {
            $result['meta'] = is_object($this->meta) && method_exists($this->meta, 'toArray') 
                ? $this->meta->toArray() 
                : $this->meta;
        }
        return $result;
    }
}
