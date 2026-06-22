<?php

namespace HighLevel\Services\Forms\Models;

/**
 * metaSchema model
 * 
 * @package HighLevel\Services\Forms\Models
 */
class MetaSchema
{
    /**
     * @var float|null
     */
    public ?float $total = null;

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
