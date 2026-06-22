<?php

namespace HighLevel\Services\Emails\Models;

/**
 * DeleteBuilderSuccesfulResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class DeleteBuilderSuccesfulResponseDto
{
    /**
     * @var string|null
     */
    public ?string $ok = null;

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
        $this->ok = $data['ok'] ?? null;
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
        if ($this->ok !== null) {
            $result['ok'] = $this->ok;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
