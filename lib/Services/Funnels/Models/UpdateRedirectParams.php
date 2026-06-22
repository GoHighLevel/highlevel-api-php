<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Funnels\Models;

/**
 * UpdateRedirectParams model
 * 
 * @package HighLevel\Services\Funnels\Models
 */
class UpdateRedirectParams
{
    /**
     * @var string
     */
    public string $target;

    /**
     * @var string
     */
    public string $action;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->target = $data['target'] ?? '';
        $this->action = $data['action'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->target !== null) {
            $result['target'] = $this->target;
        }
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
