<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * ConnectCustomProvidersConfigDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ConnectCustomProvidersConfigDto
{
    /**
     * @var mixed
     */
    public $live;

    /**
     * @var mixed
     */
    public $test;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->live = $data['live'] ?? null;
        $this->test = $data['test'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->live !== null) {
            $result['live'] = $this->live;
        }
        if ($this->test !== null) {
            $result['test'] = $this->test;
        }
        return $result;
    }
}
