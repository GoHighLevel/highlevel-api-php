<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * RecordByIdResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class RecordByIdResponseDTO
{
    /**
     * @var IRecordSchema|null
     */
    public ?IRecordSchema $record = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single IRecordSchema object
        if (isset($data['record']) && is_array($data['record'])) {
            $this->record = new IRecordSchema($data['record']);
        } else {
            $this->record = $data['record'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->record !== null) {
            $result['record'] = is_object($this->record) && method_exists($this->record, 'toArray') 
                ? $this->record->toArray() 
                : $this->record;
        }
        return $result;
    }
}
