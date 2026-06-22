<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * MentionsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class MentionsDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var float
     */
    public float $offset;

    /**
     * @var float
     */
    public float $length;

    /**
     * @var string|null
     */
    public ?string $slug = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->offset = $data['offset'] ?? 0;
        $this->length = $data['length'] ?? 0;
        $this->slug = $data['slug'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->offset !== null) {
            $result['offset'] = $this->offset;
        }
        if ($this->length !== null) {
            $result['length'] = $this->length;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        return $result;
    }
}
