<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Workflows\Models;

/**
 * WorkflowSchema model
 * 
 * @package HighLevel\Services\Workflows\Models
 */
class WorkflowSchema
{
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
    public ?string $status = null;

    /**
     * @var float|null
     */
    public ?float $version = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $updated_at = null;

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
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->updated_at = $data['updatedAt'] ?? null;
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
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
