<?php

namespace HighLevel\Services\BrandBoards\Models;

/**
 * BrandBoardListItemDTO model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class BrandBoardListItemDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var bool|null
     */
    public ?bool $default = null;

    /**
     * @var mixed
     */
    public $meta;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->default = $data['default'] ?? null;
        $this->meta = $data['meta'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->default !== null) {
            $result['default'] = $this->default;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        return $result;
    }
}
