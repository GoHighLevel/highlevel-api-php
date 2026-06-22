<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Associations\Models;

/**
 * createRelationReqDto model
 * 
 * @package HighLevel\Services\Associations\Models
 */
class CreateRelationReqDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $association_id;

    /**
     * @var string
     */
    public string $first_record_id;

    /**
     * @var string
     */
    public string $second_record_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->association_id = $data['associationId'] ?? '';
        $this->first_record_id = $data['firstRecordId'] ?? '';
        $this->second_record_id = $data['secondRecordId'] ?? '';
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
        if ($this->association_id !== null) {
            $result['associationId'] = $this->association_id;
        }
        if ($this->first_record_id !== null) {
            $result['firstRecordId'] = $this->first_record_id;
        }
        if ($this->second_record_id !== null) {
            $result['secondRecordId'] = $this->second_record_id;
        }
        return $result;
    }
}
