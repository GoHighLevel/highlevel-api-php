<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * SentToDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class SentToDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $email;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $email_cc = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $email_bcc = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $phone_no = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->email = $data['email'] ?? [];
        $this->email_cc = $data['emailCc'] ?? null;
        $this->email_bcc = $data['emailBcc'] ?? null;
        $this->phone_no = $data['phoneNo'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->email_cc !== null) {
            $result['emailCc'] = $this->email_cc;
        }
        if ($this->email_bcc !== null) {
            $result['emailBcc'] = $this->email_bcc;
        }
        if ($this->phone_no !== null) {
            $result['phoneNo'] = $this->phone_no;
        }
        return $result;
    }
}
