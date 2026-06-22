<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Links\Models;

/**
 * LinkSchema model
 * 
 * @package HighLevel\Services\Links\Models
 */
class LinkSchema
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
    public ?string $redirect_to = null;

    /**
     * @var string|null
     */
    public ?string $field_key = null;

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
        $this->redirect_to = $data['redirectTo'] ?? null;
        $this->field_key = $data['fieldKey'] ?? null;
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
        if ($this->redirect_to !== null) {
            $result['redirectTo'] = $this->redirect_to;
        }
        if ($this->field_key !== null) {
            $result['fieldKey'] = $this->field_key;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
