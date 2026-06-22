<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * CreatedQueueItemWithVariationsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class CreatedQueueItemWithVariationsDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

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
     * @var string|null
     */
    public ?string $last_scheduled_time = null;

    /**
     * @var string|null
     */
    public ?string $queue_id = null;

    /**
     * @var string|null
     */
    public ?string $post_id = null;

    /**
     * @var mixed
     */
    public $modified_post_payload;

    /**
     * @var string|null
     */
    public ?string $parent_post_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $errors = null;

    /**
     * @var float|null
     */
    public ?float $current_variation = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? null;
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
        $this->last_scheduled_time = $data['lastScheduledTime'] ?? null;
        $this->queue_id = $data['queueId'] ?? null;
        $this->post_id = $data['postId'] ?? null;
        $this->modified_post_payload = $data['modifiedPostPayload'] ?? null;
        $this->parent_post_id = $data['parentPostId'] ?? null;
        $this->errors = $data['errors'] ?? null;
        $this->current_variation = $data['currentVariation'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
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
        if ($this->last_scheduled_time !== null) {
            $result['lastScheduledTime'] = $this->last_scheduled_time;
        }
        if ($this->queue_id !== null) {
            $result['queueId'] = $this->queue_id;
        }
        if ($this->post_id !== null) {
            $result['postId'] = $this->post_id;
        }
        if ($this->modified_post_payload !== null) {
            $result['modifiedPostPayload'] = $this->modified_post_payload;
        }
        if ($this->parent_post_id !== null) {
            $result['parentPostId'] = $this->parent_post_id;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->current_variation !== null) {
            $result['currentVariation'] = $this->current_variation;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
