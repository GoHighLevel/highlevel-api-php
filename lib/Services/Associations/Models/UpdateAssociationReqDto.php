<?php

namespace HighLevel\Services\Associations\Models;

/**
 * UpdateAssociationReqDto model
 * 
 * @package HighLevel\Services\Associations\Models
 */
class UpdateAssociationReqDto
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $first_object_label;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $second_object_label;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->first_object_label = $data['firstObjectLabel'] ?? null;
        $this->second_object_label = $data['secondObjectLabel'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->first_object_label !== null) {
            $result['firstObjectLabel'] = $this->first_object_label;
        }
        if ($this->second_object_label !== null) {
            $result['secondObjectLabel'] = $this->second_object_label;
        }
        return $result;
    }
}
