<?php

namespace HighLevel\Services\Links\Models;

/**
 * LinksDto model
 * 
 * @package HighLevel\Services\Links\Models
 */
class LinksDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $redirect_to;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->redirect_to = $data['redirectTo'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->redirect_to !== null) {
            $result['redirectTo'] = $this->redirect_to;
        }
        return $result;
    }
}
