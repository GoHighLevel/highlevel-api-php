<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FetchCalendarListResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FetchCalendarListResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var array&lt;ScheduledPostDTO&gt;|null
     */
    public ?array $scheduled_posts = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        // Handle array of ScheduledPostDTO objects
        if (isset($data['scheduledPosts']) && is_array($data['scheduledPosts'])) {
            $this->scheduled_posts = array_map(function($item) {
                return is_array($item) ? new ScheduledPostDTO($item) : $item;
            }, $data['scheduledPosts']);
        } else {
            $this->scheduled_posts = $data['scheduledPosts'] ?? null;
        }
        $this->total = $data['total'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
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
        if ($this->scheduled_posts !== null) {
            $result['scheduledPosts'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->scheduled_posts);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        return $result;
    }
}
