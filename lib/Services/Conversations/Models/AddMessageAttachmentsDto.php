<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * AddMessageAttachmentsDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class AddMessageAttachmentsDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $attachments;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->attachments = $data['attachments'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        return $result;
    }
}
