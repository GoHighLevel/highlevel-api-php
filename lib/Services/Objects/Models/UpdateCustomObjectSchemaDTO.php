<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * UpdateCustomObjectSchemaDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class UpdateCustomObjectSchemaDTO
{
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
     * @var array&lt;string&gt;
     */
    public array $searchable_properties;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->labels = $data['labels'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->searchable_properties = $data['searchableProperties'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->searchable_properties !== null) {
            $result['searchableProperties'] = $this->searchable_properties;
        }
        return $result;
    }
}
