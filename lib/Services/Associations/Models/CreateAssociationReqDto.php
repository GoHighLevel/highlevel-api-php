<?php

namespace HighLevel\Services\Associations\Models;

/**
 * createAssociationReqDto model
 * 
 * @package HighLevel\Services\Associations\Models
 */
class CreateAssociationReqDto
{
    /**
     * @var string
     */
    public string $location_id;

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
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->key = $data['key'] ?? '';
        $this->first_object_label = $data['firstObjectLabel'] ?? null;
        $this->first_object_key = $data['firstObjectKey'] ?? null;
        $this->second_object_label = $data['secondObjectLabel'] ?? null;
        $this->second_object_key = $data['secondObjectKey'] ?? null;
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
        return $result;
    }
}
