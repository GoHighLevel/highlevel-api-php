<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * ScheduledPostDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class ScheduledPostDTO
{
    /**
     * @var string|null
     */
    public ?string $scheduled_date_time = null;

    /**
     * @var mixed
     */
    public $post;

    /**
     * @var string|null
     */
    public ?string $queue_item_id = null;

    /**
     * @var string|null
     */
    public ?string $queue_id = null;

    /**
     * @var float|null
     */
    public ?float $order = null;

    /**
     * @var array&lt;VariationDTO&gt;|null
     */
    public ?array $variations = null;

    /**
     * @var string|null
     */
    public ?string $primary_image = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $errors = null;

    /**
     * @var mixed
     */
    public $category;

    /**
     * @var float|null
     */
    public ?float $current_variation = null;

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
        $this->scheduled_date_time = $data['scheduledDateTime'] ?? null;
        $this->post = $data['post'] ?? null;
        $this->queue_item_id = $data['queueItemId'] ?? null;
        $this->queue_id = $data['queueId'] ?? null;
        $this->order = $data['order'] ?? null;
        // Handle array of VariationDTO objects
        if (isset($data['variations']) && is_array($data['variations'])) {
            $this->variations = array_map(function($item) {
                return is_array($item) ? new VariationDTO($item) : $item;
            }, $data['variations']);
        } else {
            $this->variations = $data['variations'] ?? null;
        }
        $this->primary_image = $data['primaryImage'] ?? null;
        $this->errors = $data['errors'] ?? null;
        $this->category = $data['category'] ?? null;
        $this->current_variation = $data['currentVariation'] ?? null;
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
        if ($this->scheduled_date_time !== null) {
            $result['scheduledDateTime'] = $this->scheduled_date_time;
        }
        if ($this->post !== null) {
            $result['post'] = $this->post;
        }
        if ($this->queue_item_id !== null) {
            $result['queueItemId'] = $this->queue_item_id;
        }
        if ($this->queue_id !== null) {
            $result['queueId'] = $this->queue_id;
        }
        if ($this->order !== null) {
            $result['order'] = $this->order;
        }
        if ($this->variations !== null) {
            $result['variations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variations);
        }
        if ($this->primary_image !== null) {
            $result['primaryImage'] = $this->primary_image;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        if ($this->current_variation !== null) {
            $result['currentVariation'] = $this->current_variation;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        return $result;
    }
}
