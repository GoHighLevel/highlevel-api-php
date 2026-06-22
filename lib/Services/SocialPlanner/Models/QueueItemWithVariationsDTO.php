<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * QueueItemWithVariationsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class QueueItemWithVariationsDTO
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
    public ?string $post_id = null;

    /**
     * @var mixed
     */
    public $post;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $errors = null;

    /**
     * @var string|null
     */
    public ?string $scheduled_date_time = null;

    /**
     * @var float|null
     */
    public ?float $scheduled_variation_index = null;

    /**
     * @var bool|null
     */
    public ?bool $is_skipped = null;

    /**
     * @var float|null
     */
    public ?float $current_variation = null;

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
        $this->post_id = $data['postId'] ?? null;
        $this->post = $data['post'] ?? null;
        $this->errors = $data['errors'] ?? null;
        $this->scheduled_date_time = $data['scheduledDateTime'] ?? null;
        $this->scheduled_variation_index = $data['scheduledVariationIndex'] ?? null;
        $this->is_skipped = $data['isSkipped'] ?? null;
        $this->current_variation = $data['currentVariation'] ?? null;
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
        if ($this->post_id !== null) {
            $result['postId'] = $this->post_id;
        }
        if ($this->post !== null) {
            $result['post'] = $this->post;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->scheduled_date_time !== null) {
            $result['scheduledDateTime'] = $this->scheduled_date_time;
        }
        if ($this->scheduled_variation_index !== null) {
            $result['scheduledVariationIndex'] = $this->scheduled_variation_index;
        }
        if ($this->is_skipped !== null) {
            $result['isSkipped'] = $this->is_skipped;
        }
        if ($this->current_variation !== null) {
            $result['currentVariation'] = $this->current_variation;
        }
        return $result;
    }
}
