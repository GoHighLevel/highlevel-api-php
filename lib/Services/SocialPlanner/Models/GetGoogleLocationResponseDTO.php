<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GetGoogleLocationResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GetGoogleLocationResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var float
     */
    public float $status_code;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var mixed
     */
    public $results;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->status_code = $data['statusCode'] ?? 0;
        $this->message = $data['message'] ?? '';
        $this->results = $data['results'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        return $result;
    }
}
