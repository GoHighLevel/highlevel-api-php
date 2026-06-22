<?php

namespace HighLevel\Services\Objects\Models;

/**
 * SearchRecordsBody model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class SearchRecordsBody
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var float
     */
    public float $page;

    /**
     * @var float
     */
    public float $page_limit;

    /**
     * @var string
     */
    public string $query;

    /**
     * @var array&lt;string&gt;
     */
    public array $search_after;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->page = $data['page'] ?? 0;
        $this->page_limit = $data['pageLimit'] ?? 0;
        $this->query = $data['query'] ?? '';
        $this->search_after = $data['searchAfter'] ?? [];
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
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->page_limit !== null) {
            $result['pageLimit'] = $this->page_limit;
        }
        if ($this->query !== null) {
            $result['query'] = $this->query;
        }
        if ($this->search_after !== null) {
            $result['searchAfter'] = $this->search_after;
        }
        return $result;
    }
}
