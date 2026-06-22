<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ExportMessagesResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ExportMessagesResponseDto
{
    /**
     * @var array&lt;GetMessageResponseDto&gt;
     */
    public array $messages;

    /**
     * @var string|null
     */
    public ?string $next_cursor = null;

    /**
     * @var float
     */
    public float $total;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetMessageResponseDto objects
        if (isset($data['messages']) && is_array($data['messages'])) {
            $this->messages = array_map(function($item) {
                return is_array($item) ? new GetMessageResponseDto($item) : $item;
            }, $data['messages']);
        } else {
            $this->messages = $data['messages'] ?? [];
        }
        $this->next_cursor = $data['nextCursor'] ?? null;
        $this->total = $data['total'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->messages !== null) {
            $result['messages'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->messages);
        }
        if ($this->next_cursor !== null) {
            $result['nextCursor'] = $this->next_cursor;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
