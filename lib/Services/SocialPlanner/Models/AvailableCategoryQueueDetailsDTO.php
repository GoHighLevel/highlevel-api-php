<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AvailableCategoryQueueDetailsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AvailableCategoryQueueDetailsDTO
{
    /**
     * @var string|null
     */
    public ?string $queue_id = null;

    /**
     * @var bool|null
     */
    public ?bool $prioritize_new_content = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_future_posts = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->queue_id = $data['queueId'] ?? null;
        $this->prioritize_new_content = $data['prioritizeNewContent'] ?? null;
        $this->enable_future_posts = $data['enableFuturePosts'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->queue_id !== null) {
            $result['queueId'] = $this->queue_id;
        }
        if ($this->prioritize_new_content !== null) {
            $result['prioritizeNewContent'] = $this->prioritize_new_content;
        }
        if ($this->enable_future_posts !== null) {
            $result['enableFuturePosts'] = $this->enable_future_posts;
        }
        return $result;
    }
}
