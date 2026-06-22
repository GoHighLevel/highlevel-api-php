<?php

namespace HighLevel\Services\Emails\Models;

/**
 * CreateTemplateFolderPublicV2BodyDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class CreateTemplateFolderPublicV2BodyDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->user_id = $data['userId'] ?? null;
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
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        return $result;
    }
}
