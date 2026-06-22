<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Associations\Models;

/**
 * GetPostSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Associations\Models
 */
class GetPostSuccessfulResponseDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $key;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $first_object_label;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $first_object_key;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $second_object_label;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $second_object_key;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $association_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->key = $data['key'] ?? '';
        $this->first_object_label = $data['firstObjectLabel'] ?? null;
        $this->first_object_key = $data['firstObjectKey'] ?? null;
        $this->second_object_label = $data['secondObjectLabel'] ?? null;
        $this->second_object_key = $data['secondObjectKey'] ?? null;
        $this->association_type = $data['associationType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->first_object_label !== null) {
            $result['firstObjectLabel'] = $this->first_object_label;
        }
        if ($this->first_object_key !== null) {
            $result['firstObjectKey'] = $this->first_object_key;
        }
        if ($this->second_object_label !== null) {
            $result['secondObjectLabel'] = $this->second_object_label;
        }
        if ($this->second_object_key !== null) {
            $result['secondObjectKey'] = $this->second_object_key;
        }
        if ($this->association_type !== null) {
            $result['associationType'] = $this->association_type;
        }
        return $result;
    }
}
