<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * UpdateContactsSuccessfulResponseDtoV3 model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class UpdateContactsSuccessfulResponseDtoV3
{
    /**
     * @var bool|null
     */
    public ?bool $succeeded = null;

    /**
     * @var mixed
     */
    public $contact;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeeded = $data['succeeded'] ?? null;
        $this->contact = $data['contact'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->succeeded !== null) {
            $result['succeeded'] = $this->succeeded;
        }
        if ($this->contact !== null) {
            $result['contact'] = $this->contact;
        }
        return $result;
    }
}
