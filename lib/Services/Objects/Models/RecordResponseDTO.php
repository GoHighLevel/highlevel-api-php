<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * RecordResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class RecordResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;string&gt;
     */
    public array $owner;

    /**
     * @var array&lt;string&gt;
     */
    public array $followers;

    /**
     * @var string
     */
    public string $properties;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $object_id;

    /**
     * @var string
     */
    public string $object_key;

    /**
     * @var mixed
     */
    public $created_by;

    /**
     * @var mixed
     */
    public $last_updated_by;

    /**
     * @var array&lt;float&gt;
     */
    public array $search_after;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->owner = $data['owner'] ?? [];
        $this->followers = $data['followers'] ?? [];
        $this->properties = $data['properties'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->object_id = $data['objectId'] ?? '';
        $this->object_key = $data['objectKey'] ?? '';
        $this->created_by = $data['createdBy'] ?? null;
        $this->last_updated_by = $data['lastUpdatedBy'] ?? null;
        $this->search_after = $data['searchAfter'] ?? [];
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
        if ($this->owner !== null) {
            $result['owner'] = $this->owner;
        }
        if ($this->followers !== null) {
            $result['followers'] = $this->followers;
        }
        if ($this->properties !== null) {
            $result['properties'] = $this->properties;
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
        if ($this->object_id !== null) {
            $result['objectId'] = $this->object_id;
        }
        if ($this->object_key !== null) {
            $result['objectKey'] = $this->object_key;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->last_updated_by !== null) {
            $result['lastUpdatedBy'] = $this->last_updated_by;
        }
        if ($this->search_after !== null) {
            $result['searchAfter'] = $this->search_after;
        }
        return $result;
    }
}
