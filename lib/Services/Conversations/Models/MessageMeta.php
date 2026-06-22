<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * MessageMeta model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class MessageMeta
{
    /**
     * @var string|null
     */
    public ?string $call_duration = null;

    /**
     * @var string|null
     */
    public ?string $call_status = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $email = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->call_duration = $data['callDuration'] ?? null;
        $this->call_status = $data['callStatus'] ?? null;
        $this->email = $data['email'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->call_duration !== null) {
            $result['callDuration'] = $this->call_duration;
        }
        if ($this->call_status !== null) {
            $result['callStatus'] = $this->call_status;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        return $result;
    }
}
