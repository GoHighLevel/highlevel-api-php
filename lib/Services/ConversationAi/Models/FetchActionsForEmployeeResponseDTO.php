<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * fetchActionsForEmployeeResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FetchActionsForEmployeeResponseDTO
{
    /**
     * @var array&lt;ActionDataDTO&gt;
     */
    public array $data;

    /**
     * @var bool
     */
    public bool $success;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ActionDataDTO objects
        if (isset($data['data']) && is_array($data['data'])) {
            $this->data = array_map(function($item) {
                return is_array($item) ? new ActionDataDTO($item) : $item;
            }, $data['data']);
        } else {
            $this->data = $data['data'] ?? [];
        }
        $this->success = $data['success'] ?? false;
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
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }
}
