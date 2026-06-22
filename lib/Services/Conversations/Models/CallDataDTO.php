<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * CallDataDTO model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class CallDataDTO
{
    /**
     * @var string|null
     */
    public ?string $to = null;

    /**
     * @var string|null
     */
    public ?string $from = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->to = $data['to'] ?? null;
        $this->from = $data['from'] ?? null;
        $this->status = $data['status'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->to !== null) {
            $result['to'] = $this->to;
        }
        if ($this->from !== null) {
            $result['from'] = $this->from;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
