<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LocalizedStringDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LocalizedStringDTO
{
    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $localized;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->localized = $data['localized'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->localized !== null) {
            $result['localized'] = $this->localized;
        }
        return $result;
    }
}
