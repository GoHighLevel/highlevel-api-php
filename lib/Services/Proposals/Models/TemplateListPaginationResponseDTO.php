<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * TemplateListPaginationResponseDTO model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class TemplateListPaginationResponseDTO
{
    /**
     * @var array&lt;TemplateListResponseDTO&gt;
     */
    public array $data;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of TemplateListResponseDTO objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new TemplateListResponseDTO($item) : $item;
            }, $data['data']);
        } else {
            $this->data = $data['data'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
        $this->trace_id = $data['traceId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->data);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
