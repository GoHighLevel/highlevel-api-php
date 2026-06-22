<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CreateCategoryQueueDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CreateCategoryQueueDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $category_id;

    /**
     * @var array&lt;TimeSlotDTO&gt;
     */
    public array $time_slots;

    /**
     * @var bool|null
     */
    public ?bool $enable_future_posts = null;

    /**
     * @var bool|null
     */
    public ?bool $prioritize_new_content = null;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->category_id = $data['categoryId'] ?? '';
        // Handle array of TimeSlotDTO objects
        if (isset($data['timeSlots']) && is_array($data['timeSlots'])) {
            $this->time_slots = array_map(function($item) {
                return is_array($item) ? new TimeSlotDTO($item) : $item;
            }, $data['timeSlots']);
        } else {
            $this->time_slots = $data['timeSlots'] ?? [];
        }
        $this->enable_future_posts = $data['enableFuturePosts'] ?? null;
        $this->prioritize_new_content = $data['prioritizeNewContent'] ?? null;
        $this->user_id = $data['userId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
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
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        return $result;
    }
}
