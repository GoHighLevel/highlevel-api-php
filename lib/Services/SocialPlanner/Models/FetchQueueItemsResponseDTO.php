<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchQueueItemsResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchQueueItemsResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;QueueItemDTO&gt;|null
     */
    public ?array $items = null;

    /**
     * @var FetchQueueItemsMetaDTO|null
     */
    public ?FetchQueueItemsMetaDTO $meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        // Handle array of QueueItemDTO objects
        if (isset($data['items']) && is_array($data['items'])) {
            $this->items = array_map(function($item) {
                return is_array($item) ? new QueueItemDTO($item) : $item;
            }, $data['items']);
        } else {
            $this->items = $data['items'] ?? null;
        }
        // Handle single FetchQueueItemsMetaDTO object
        if (isset($data['meta']) && is_array($data['meta'])) {
            $this->meta = new FetchQueueItemsMetaDTO($data['meta']);
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
        if ($this->items !== null) {
            $result['items'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->items);
        }
        if ($this->meta !== null) {
            $result['meta'] = is_object($this->meta) && method_exists($this->meta, 'toArray') 
                ? $this->meta->toArray() 
                : $this->meta;
        }
        return $result;
    }
}
