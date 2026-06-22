<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * AttachmentsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class AttachmentsDto
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
    public string $url;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var float
     */
    public float $size;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->url = $data['url'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->size = $data['size'] ?? 0;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->size !== null) {
            $result['size'] = $this->size;
        }
        return $result;
    }
}
