<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * ContactsWorkflowSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class ContactsWorkflowSuccessfulResponseDto
{
    /**
     * @var bool|null
     */
    public ?bool $succeeded = null;

    /**
     * @var bool|null
     */
    public ?bool $succeded = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeeded = $data['succeeded'] ?? null;
        $this->succeded = $data['succeded'] ?? null;
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
        if ($this->succeded !== null) {
            $result['succeded'] = $this->succeded;
        }
        return $result;
    }
}
