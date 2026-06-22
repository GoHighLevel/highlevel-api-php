<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetByIdResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetByIdResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $name = null;

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
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $created_by = null;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string|null
     */
    public ?string $message = null;

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
        $this->name = $data['name'] ?? null;
        $this->primary_color = $data['primaryColor'] ?? null;
        $this->secondary_color = $data['secondaryColor'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->id = $data['_id'] ?? null;
        $this->created_by = $data['createdBy'] ?? null;
        $this->deleted = $data['deleted'] ?? false;
        $this->message = $data['message'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->primary_color !== null) {
            $result['primaryColor'] = $this->primary_color;
        }
        if ($this->secondary_color !== null) {
            $result['secondaryColor'] = $this->secondary_color;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
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
