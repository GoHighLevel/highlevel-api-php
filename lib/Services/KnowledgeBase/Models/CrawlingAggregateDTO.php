<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CrawlingAggregateDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CrawlingAggregateDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var array&lt;CrawlingRecordDTO&gt;
     */
    public array $records;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        // Handle array of CrawlingRecordDTO objects
        if (isset($data['records']) && is_array($data['records'])) {
            $this->records = array_map(function($item) {
                return is_array($item) ? new CrawlingRecordDTO($item) : $item;
            }, $data['records']);
        } else {
            $this->records = $data['records'] ?? [];
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->records !== null) {
            $result['records'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->records);
        }
        return $result;
    }
}
