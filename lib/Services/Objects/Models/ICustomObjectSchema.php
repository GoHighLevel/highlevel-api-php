<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * ICustomObjectSchema model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class ICustomObjectSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool
     */
    public bool $standard;

    /**
     * @var string
     */
    public string $key;

    /**
     * @var mixed
     */
    public $labels;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $primary_display_property;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string
     */
    public string $date_updated;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->standard = $data['standard'] ?? false;
        $this->key = $data['key'] ?? '';
        $this->labels = $data['labels'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->primary_display_property = $data['primaryDisplayProperty'] ?? '';
        $this->date_added = $data['dateAdded'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
        $this->type = $data['type'] ?? null;
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
        if ($this->standard !== null) {
            $result['standard'] = $this->standard;
        }
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->primary_display_property !== null) {
            $result['primaryDisplayProperty'] = $this->primary_display_property;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }
}
