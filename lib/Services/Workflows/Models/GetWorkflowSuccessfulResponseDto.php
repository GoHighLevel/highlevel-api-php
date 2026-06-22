<?php

namespace HighLevel\Services\Workflows\Models;

/**
 * GetWorkflowSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Workflows\Models
 */
class GetWorkflowSuccessfulResponseDto
{
    /**
     * @var array&lt;WorkflowSchema&gt;|null
     */
    public ?array $workflows = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of WorkflowSchema objects
        if (isset($data['workflows']) && is_array($data['workflows'])) {
            $this->workflows = array_map(function($item) {
                return is_array($item) ? new WorkflowSchema($item) : $item;
            }, $data['workflows']);
        } else {
            $this->workflows = $data['workflows'] ?? null;
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
        if ($this->workflows !== null) {
            $result['workflows'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->workflows);
        }
        return $result;
    }
}
