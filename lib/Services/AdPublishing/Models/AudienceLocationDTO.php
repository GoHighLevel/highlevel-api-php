<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudienceLocationDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudienceLocationDTO
{
    /**
     * @var string
     */
    public string $key;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $selection_type;

    /**
     * @var float|null
     */
    public ?float $radius = null;

    /**
     * @var string|null
     */
    public ?string $radius_unit = null;

    /**
     * @var mixed
     */
    public $geometry;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->key = $data['key'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->selection_type = $data['selectionType'] ?? '';
        $this->radius = $data['radius'] ?? null;
        $this->radius_unit = $data['radiusUnit'] ?? null;
        $this->geometry = $data['geometry'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->selection_type !== null) {
            $result['selectionType'] = $this->selection_type;
        }
        if ($this->radius !== null) {
            $result['radius'] = $this->radius;
        }
        if ($this->radius_unit !== null) {
            $result['radiusUnit'] = $this->radius_unit;
        }
        if ($this->geometry !== null) {
            $result['geometry'] = $this->geometry;
        }
        return $result;
    }
}
