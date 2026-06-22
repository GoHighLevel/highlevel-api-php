<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreationLocaleDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreationLocaleDTO
{
    /**
     * @var string
     */
    public string $country;

    /**
     * @var string
     */
    public string $language;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->country = $data['country'] ?? '';
        $this->language = $data['language'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->language !== null) {
            $result['language'] = $this->language;
        }
        return $result;
    }
}
