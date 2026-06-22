<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * GetAgentsResponseDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class GetAgentsResponseDTO
{
    /**
     * @var float
     */
    public float $total;

    /**
     * @var float
     */
    public float $page;

    /**
     * @var float
     */
    public float $page_size;

    /**
     * @var array&lt;GetAgentResponseDTO&gt;
     */
    public array $agents;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->total = $data['total'] ?? 0;
        $this->page = $data['page'] ?? 0;
        $this->page_size = $data['pageSize'] ?? 0;
        // Handle array of GetAgentResponseDTO objects
        if (isset($data['agents']) && is_array($data['agents'])) {
            $this->agents = array_map(function($item) {
                return is_array($item) ? new GetAgentResponseDTO($item) : $item;
            }, $data['agents']);
        } else {
            $this->agents = $data['agents'] ?? [];
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
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->page_size !== null) {
            $result['pageSize'] = $this->page_size;
        }
        if ($this->agents !== null) {
            $result['agents'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->agents);
        }
        return $result;
    }
}
