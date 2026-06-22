<?php

namespace HighLevel\Services\BrandBoards\Models;

/**
 * Logo model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class Logo
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $label;

    /**
     * @var string
     */
    public string $path;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->url = $data['url'] ?? '';
        $this->label = $data['label'] ?? '';
        $this->path = $data['path'] ?? '';
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
            $result['id'] = $this->id;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        return $result;
    }
}
