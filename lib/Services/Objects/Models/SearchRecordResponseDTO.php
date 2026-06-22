<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Objects\Models;

/**
 * SearchRecordResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class SearchRecordResponseDTO
{
    /**
     * @var array&lt;RecordResponseDTO&gt;|null
     */
    public ?array $records = null;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of RecordResponseDTO objects
        if (isset($data['records']) && is_array($data['records'])) {
            $this->records = array_map(function($item) {
                return is_array($item) ? new RecordResponseDTO($item) : $item;
            }, $data['records']);
        } else {
            $this->records = $data['records'] ?? null;
        }
        $this->total = $data['total'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->records !== null) {
            $result['records'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->records);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
