<?php

namespace HighLevel\Services\Products\Models;

/**
 * ProductLabelDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class ProductLabelDto
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string|null
     */
    public ?string $start_date = null;

    /**
     * @var string|null
     */
    public ?string $end_date = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? '';
        $this->start_date = $data['startDate'] ?? null;
        $this->end_date = $data['endDate'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        return $result;
    }
}
