<?php

namespace HighLevel\Services\Objects\Models;

/**
 * CreateCustomObjectSchemaDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CreateCustomObjectSchemaDTO
{
    /**
     * @var mixed
     */
    public $labels;

    /**
     * @var string
     */
    public string $key;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var mixed
     */
    public $primary_display_property_details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->labels = $data['labels'] ?? null;
        $this->key = $data['key'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->primary_display_property_details = $data['primaryDisplayPropertyDetails'] ?? null;
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
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->primary_display_property_details !== null) {
            $result['primaryDisplayPropertyDetails'] = $this->primary_display_property_details;
        }
        return $result;
    }
}
