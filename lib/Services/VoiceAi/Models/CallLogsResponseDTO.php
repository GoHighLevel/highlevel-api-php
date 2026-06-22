<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallLogsResponseDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallLogsResponseDTO
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
     * @var array&lt;CallLogDTO&gt;
     */
    public array $call_logs;

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
        // Handle array of CallLogDTO objects
        if (isset($data['callLogs']) && is_array($data['callLogs'])) {
            $this->call_logs = array_map(function($item) {
                return is_array($item) ? new CallLogDTO($item) : $item;
            }, $data['callLogs']);
        } else {
            $this->call_logs = $data['callLogs'] ?? [];
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
        if ($this->call_logs !== null) {
            $result['callLogs'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->call_logs);
        }
        return $result;
    }
}
