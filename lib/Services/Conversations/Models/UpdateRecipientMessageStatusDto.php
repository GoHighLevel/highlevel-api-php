<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * UpdateRecipientMessageStatusDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UpdateRecipientMessageStatusDto
{
    /**
     * @var string
     */
    public string $email_id;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string|null
     */
    public ?string $fail_reason = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->email_id = $data['emailId'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->fail_reason = $data['failReason'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->email_id !== null) {
            $result['emailId'] = $this->email_id;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->fail_reason !== null) {
            $result['failReason'] = $this->fail_reason;
        }
        return $result;
    }
}
