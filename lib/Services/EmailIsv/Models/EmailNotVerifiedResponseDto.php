<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\EmailIsv\Models;

/**
 * EmailNotVerifiedResponseDto model
 * 
 * @package HighLevel\Services\EmailIsv\Models
 */
class EmailNotVerifiedResponseDto
{
    /**
     * @var bool
     */
    public bool $verified;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->verified = $data['verified'] ?? false;
        $this->message = $data['message'] ?? null;
        $this->address = $data['address'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->verified !== null) {
            $result['verified'] = $this->verified;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        return $result;
    }
}
