<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetUploadStatusResponseSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetUploadStatusResponseSchema
{
    /**
     * @var array&lt;CSVImportSchema&gt;
     */
    public array $csvs;

    /**
     * @var float
     */
    public float $count;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CSVImportSchema objects
        if (isset($data['csvs']) && is_array($data['csvs'])) {
            $this->csvs = array_map(function($item) {
                return is_array($item) ? new CSVImportSchema($item) : $item;
            }, $data['csvs']);
        } else {
            $this->csvs = $data['csvs'] ?? [];
        }
        $this->count = $data['count'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->csvs !== null) {
            $result['csvs'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->csvs);
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
