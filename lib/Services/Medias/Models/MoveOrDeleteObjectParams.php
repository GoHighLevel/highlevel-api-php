<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Medias\Models;

/**
 * MoveOrDeleteObjectParams model
 * 
 * @package HighLevel\Services\Medias\Models
 */
class MoveOrDeleteObjectParams
{
    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_type = $data['altType'] ?? '';
        $this->alt_id = $data['altId'] ?? '';
        $this->id = $data['_id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        return $result;
    }
}
