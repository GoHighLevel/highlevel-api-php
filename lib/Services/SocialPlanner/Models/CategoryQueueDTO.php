<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CategoryQueueDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CategoryQueueDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $category_id = null;

    /**
     * @var array&lt;TimeSlotDTO&gt;|null
     */
    public ?array $time_slots = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_future_posts = null;

    /**
     * @var bool|null
     */
    public ?bool $prioritize_new_content = null;

    /**
     * @var float|null
     */
    public ?float $current_order = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $start_date = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $skip_date_time = null;

    /**
     * @var string|null
     */
    public ?string $current_post_id = null;

    /**
     * @var float|null
     */
    public ?float $total_posts = null;

    /**
     * @var string|null
     */
    public ?string $last_scheduled_time = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->category_id = $data['categoryId'] ?? null;
        // Handle array of TimeSlotDTO objects
        if (isset($data['timeSlots']) && is_array($data['timeSlots'])) {
            $this->time_slots = array_map(function($item) {
                return is_array($item) ? new TimeSlotDTO($item) : $item;
            }, $data['timeSlots']);
        } else {
            $this->time_slots = $data['timeSlots'] ?? null;
        }
        $this->enable_future_posts = $data['enableFuturePosts'] ?? null;
        $this->prioritize_new_content = $data['prioritizeNewContent'] ?? null;
        $this->current_order = $data['currentOrder'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->start_date = $data['startDate'] ?? null;
        $this->skip_date_time = $data['skipDateTime'] ?? null;
        $this->current_post_id = $data['currentPostId'] ?? null;
        $this->total_posts = $data['totalPosts'] ?? null;
        $this->last_scheduled_time = $data['lastScheduledTime'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->category_id !== null) {
            $result['categoryId'] = $this->category_id;
        }
        if ($this->time_slots !== null) {
            $result['timeSlots'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->time_slots);
        }
        if ($this->enable_future_posts !== null) {
            $result['enableFuturePosts'] = $this->enable_future_posts;
        }
        if ($this->prioritize_new_content !== null) {
            $result['prioritizeNewContent'] = $this->prioritize_new_content;
        }
        if ($this->current_order !== null) {
            $result['currentOrder'] = $this->current_order;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->skip_date_time !== null) {
            $result['skipDateTime'] = $this->skip_date_time;
        }
        if ($this->current_post_id !== null) {
            $result['currentPostId'] = $this->current_post_id;
        }
        if ($this->total_posts !== null) {
            $result['totalPosts'] = $this->total_posts;
        }
        if ($this->last_scheduled_time !== null) {
            $result['lastScheduledTime'] = $this->last_scheduled_time;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
