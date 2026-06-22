<?php

namespace HighLevel\Services\BrandBoards\Models;

/**
 * SetDefaultBrandVoicePublicV1ResponseDto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class SetDefaultBrandVoicePublicV1ResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $brand_voice_id;

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
        $this->success = $data['success'] ?? false;
        $this->brand_voice_id = $data['brandVoiceId'] ?? '';
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
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->brand_voice_id !== null) {
            $result['brandVoiceId'] = $this->brand_voice_id;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
