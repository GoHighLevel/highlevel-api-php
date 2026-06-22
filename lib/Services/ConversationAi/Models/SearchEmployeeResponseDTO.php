<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * SearchEmployeeResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class SearchEmployeeResponseDTO
{
    /**
     * @var array&lt;EmployeeListItemDTO&gt;
     */
    public array $agents;

    /**
     * @var float
     */
    public float $total_count;

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
        // Handle array of EmployeeListItemDTO objects
        if (isset($data['agents']) && is_array($data['agents'])) {
            $this->agents = array_map(function($item) {
                return is_array($item) ? new EmployeeListItemDTO($item) : $item;
            }, $data['agents']);
        } else {
            $this->agents = $data['agents'] ?? [];
        }
        $this->total_count = $data['totalCount'] ?? 0;
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
        if ($this->agents !== null) {
            $result['agents'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->agents);
        }
        if ($this->total_count !== null) {
            $result['totalCount'] = $this->total_count;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        return $result;
    }
}
