<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * UpsertContactsSuccessfulResponseDtoV3 model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class UpsertContactsSuccessfulResponseDtoV3
{
    /**
     * @var bool|null
     */
    public ?bool $new = null;

    /**
     * @var mixed
     */
    public $contact;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->new = $data['new'] ?? null;
        $this->contact = $data['contact'] ?? null;
        $this->trace_id = $data['traceId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->new !== null) {
            $result['new'] = $this->new;
        }
        if ($this->contact !== null) {
            $result['contact'] = $this->contact;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
