<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * V3PaginationMetaDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class V3PaginationMetaDto
{
    /**
     * @var float|null
     */
    public ?float $total_records = null;

    /**
     * @var bool
     */
    public bool $has_next_page;

    /**
     * @var bool
     */
    public bool $has_prev_page;

    /**
     * @var string|null
     */
    public ?string $next_page_token = null;

    /**
     * @var string|null
     */
    public ?string $prev_page_token = null;

    /**
     * @var float
     */
    public float $current_page_size;

    /**
     * @var float|null
     */
    public ?float $estimated_total_records = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->total_records = $data['totalRecords'] ?? null;
        $this->has_next_page = $data['hasNextPage'] ?? false;
        $this->has_prev_page = $data['hasPrevPage'] ?? false;
        $this->next_page_token = $data['nextPageToken'] ?? null;
        $this->prev_page_token = $data['prevPageToken'] ?? null;
        $this->current_page_size = $data['currentPageSize'] ?? 0;
        $this->estimated_total_records = $data['estimatedTotalRecords'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->total_records !== null) {
            $result['totalRecords'] = $this->total_records;
        }
        if ($this->has_next_page !== null) {
            $result['hasNextPage'] = $this->has_next_page;
        }
        if ($this->has_prev_page !== null) {
            $result['hasPrevPage'] = $this->has_prev_page;
        }
        if ($this->next_page_token !== null) {
            $result['nextPageToken'] = $this->next_page_token;
        }
        if ($this->prev_page_token !== null) {
            $result['prevPageToken'] = $this->prev_page_token;
        }
        if ($this->current_page_size !== null) {
            $result['currentPageSize'] = $this->current_page_size;
        }
        if ($this->estimated_total_records !== null) {
            $result['estimatedTotalRecords'] = $this->estimated_total_records;
        }
        return $result;
    }
}
