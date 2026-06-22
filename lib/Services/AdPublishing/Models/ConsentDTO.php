<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * ConsentDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class ConsentDTO
{
    /**
     * @var bool
     */
    public bool $check_required;

    /**
     * @var float
     */
    public float $id;

    /**
     * @var mixed
     */
    public $consent;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->check_required = $data['checkRequired'] ?? false;
        $this->id = $data['id'] ?? 0;
        $this->consent = $data['consent'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->check_required !== null) {
            $result['checkRequired'] = $this->check_required;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->consent !== null) {
            $result['consent'] = $this->consent;
        }
        return $result;
    }
}
