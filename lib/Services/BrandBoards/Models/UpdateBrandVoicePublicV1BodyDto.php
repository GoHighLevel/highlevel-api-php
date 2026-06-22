<?php

namespace HighLevel\Services\BrandBoards\Models;

/**
 * UpdateBrandVoicePublicV1BodyDto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class UpdateBrandVoicePublicV1BodyDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var mixed
     */
    public $answers;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->answers = $data['answers'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->answers !== null) {
            $result['answers'] = $this->answers;
        }
        return $result;
    }
}
