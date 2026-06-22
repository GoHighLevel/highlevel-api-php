<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * ConversationProviderSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class ConversationProviderSchema
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
    public string $type;

    /**
     * @var bool
     */
    public bool $default;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->default = $data['default'] ?? false;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->default !== null) {
            $result['default'] = $this->default;
        }
        return $result;
    }
}
