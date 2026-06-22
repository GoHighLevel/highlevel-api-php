<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * TwilioSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class TwilioSchema
{
    /**
     * @var string
     */
    public string $sid;

    /**
     * @var string
     */
    public string $auth_token;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->sid = $data['sid'] ?? '';
        $this->auth_token = $data['authToken'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->sid !== null) {
            $result['sid'] = $this->sid;
        }
        if ($this->auth_token !== null) {
            $result['authToken'] = $this->auth_token;
        }
        return $result;
    }
}
