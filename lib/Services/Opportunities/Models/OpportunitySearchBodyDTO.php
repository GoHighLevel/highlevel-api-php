<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * OpportunitySearchBodyDTO model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class OpportunitySearchBodyDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $query;

    /**
     * @var float
     */
    public float $limit;

    /**
     * @var float
     */
    public float $page;

    /**
     * @var array&lt;string&gt;
     */
    public array $search_after;

    /**
     * @var mixed
     */
    public $additional_details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->query = $data['query'] ?? '';
        $this->limit = $data['limit'] ?? 0;
        $this->page = $data['page'] ?? 0;
        $this->search_after = $data['searchAfter'] ?? [];
        $this->additional_details = $data['additionalDetails'] ?? null;
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
        if ($this->query !== null) {
            $result['query'] = $this->query;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->search_after !== null) {
            $result['searchAfter'] = $this->search_after;
        }
        if ($this->additional_details !== null) {
            $result['additionalDetails'] = $this->additional_details;
        }
        return $result;
    }
}
