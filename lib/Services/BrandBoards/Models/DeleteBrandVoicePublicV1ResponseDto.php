<?php

namespace HighLevel\Services\BrandBoards\Models;

/**
 * DeleteBrandVoicePublicV1ResponseDto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class DeleteBrandVoicePublicV1ResponseDto
{
    /**
     * @var bool
     */
    public bool $deleted;

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
        $this->deleted = $data['deleted'] ?? false;
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
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
