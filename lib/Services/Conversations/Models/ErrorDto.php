<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * ErrorDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ErrorDto
{
    /**
     * @var string
     */
    public string $code;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $message;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->code = $data['code'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->message = $data['message'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
