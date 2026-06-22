<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * SearchMetaResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class SearchMetaResponseSchema
{
    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * @var string|null
     */
    public ?string $next_page_url = null;

    /**
     * @var string|null
     */
    public ?string $start_after_id = null;

    /**
     * @var float|null
     */
    public ?float $start_after = null;

    /**
     * @var float|null
     */
    public ?float $current_page = null;

    /**
     * @var float|null
     */
    public ?float $next_page = null;

    /**
     * @var float|null
     */
    public ?float $prev_page = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->total = $data['total'] ?? null;
        $this->next_page_url = $data['nextPageUrl'] ?? null;
        $this->start_after_id = $data['startAfterId'] ?? null;
        $this->start_after = $data['startAfter'] ?? null;
        $this->current_page = $data['currentPage'] ?? null;
        $this->next_page = $data['nextPage'] ?? null;
        $this->prev_page = $data['prevPage'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->next_page_url !== null) {
            $result['nextPageUrl'] = $this->next_page_url;
        }
        if ($this->start_after_id !== null) {
            $result['startAfterId'] = $this->start_after_id;
        }
        if ($this->start_after !== null) {
            $result['startAfter'] = $this->start_after;
        }
        if ($this->current_page !== null) {
            $result['currentPage'] = $this->current_page;
        }
        if ($this->next_page !== null) {
            $result['nextPage'] = $this->next_page;
        }
        if ($this->prev_page !== null) {
            $result['prevPage'] = $this->prev_page;
        }
        return $result;
    }
}
