<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AvailableCategoryDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AvailableCategoryDTO
{
    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $primary_color = null;

    /**
     * @var string|null
     */
    public ?string $secondary_color = null;

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
     * @var float|null
     */
    public ?float $published_posts_count = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var mixed
     */
    public $queue_details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->deleted = $data['deleted'] ?? null;
        $this->id = $data['_id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->primary_color = $data['primaryColor'] ?? null;
        $this->secondary_color = $data['secondaryColor'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
        $this->published_posts_count = $data['publishedPostsCount'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->queue_details = $data['queueDetails'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->primary_color !== null) {
            $result['primaryColor'] = $this->primary_color;
        }
        if ($this->secondary_color !== null) {
            $result['secondaryColor'] = $this->secondary_color;
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
        if ($this->published_posts_count !== null) {
            $result['publishedPostsCount'] = $this->published_posts_count;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->queue_details !== null) {
            $result['queueDetails'] = $this->queue_details;
        }
        return $result;
    }
}
