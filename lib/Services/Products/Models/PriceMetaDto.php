<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Products\Models;

/**
 * PriceMetaDto model
 * 
 * @package HighLevel\Services\Products\Models
 */
class PriceMetaDto
{
    /**
     * @var string
     */
    public string $source;

    /**
     * @var string|null
     */
    public ?string $source_id = null;

    /**
     * @var string
     */
    public string $stripe_price_id;

    /**
     * @var string
     */
    public string $internal_source;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->source = $data['source'] ?? '';
        $this->source_id = $data['sourceId'] ?? null;
        $this->stripe_price_id = $data['stripePriceId'] ?? '';
        $this->internal_source = $data['internalSource'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->stripe_price_id !== null) {
            $result['stripePriceId'] = $this->stripe_price_id;
        }
        if ($this->internal_source !== null) {
            $result['internalSource'] = $this->internal_source;
        }
        return $result;
    }
}
