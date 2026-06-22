<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * MultipleChoiceOptionDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class MultipleChoiceOptionDTO
{
    /**
     * @var float
     */
    public float $id;

    /**
     * @var mixed
     */
    public $text;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? 0;
        $this->text = $data['text'] ?? null;
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
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }
}
