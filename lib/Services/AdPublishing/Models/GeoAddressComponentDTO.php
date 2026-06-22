<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GeoAddressComponentDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GeoAddressComponentDTO
{
    /**
     * @var string|null
     */
    public ?string $long_name = null;

    /**
     * @var string|null
     */
    public ?string $short_name = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $types = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->long_name = $data['longName'] ?? null;
        $this->short_name = $data['shortName'] ?? null;
        $this->types = $data['types'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->long_name !== null) {
            $result['longName'] = $this->long_name;
        }
        if ($this->short_name !== null) {
            $result['shortName'] = $this->short_name;
        }
        if ($this->types !== null) {
            $result['types'] = $this->types;
        }
        return $result;
    }
}
