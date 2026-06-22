<?php

namespace HighLevel\Services\Emails\Models;

/**
 * BuilderAttributePublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BuilderAttributePublicV2Dto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $default = null;

    /**
     * @var string|null
     */
    public ?string $unit = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->default = $data['default'] ?? null;
        $this->unit = $data['unit'] ?? null;
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
        if ($this->default !== null) {
            $result['default'] = $this->default;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }
}
