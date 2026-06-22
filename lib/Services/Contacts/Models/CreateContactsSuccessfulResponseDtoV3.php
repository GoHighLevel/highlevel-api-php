<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateContactsSuccessfulResponseDtoV3 model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateContactsSuccessfulResponseDtoV3
{
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
        if ($this->contact !== null) {
            $result['contact'] = $this->contact;
        }
        return $result;
    }
}
