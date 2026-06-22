<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * LostReasonsResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class LostReasonsResponseSchema
{
    /**
     * @var array&lt;LostReasonResponseSchema&gt;|null
     */
    public ?array $lost_reasons = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of LostReasonResponseSchema objects
        if (isset($data['lostReasons']) && is_array($data['lostReasons'])) {
            $this->lost_reasons = array_map(function($item) {
                return is_array($item) ? new LostReasonResponseSchema($item) : $item;
            }, $data['lostReasons']);
        } else {
            $this->lost_reasons = $data['lostReasons'] ?? null;
        }
        $this->total = $data['total'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->lost_reasons !== null) {
            $result['lostReasons'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->lost_reasons);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
