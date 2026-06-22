<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * NumberCapabilitiesDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class NumberCapabilitiesDto
{
    /**
     * @var bool|null
     */
    public ?bool $voice = null;

    /**
     * @var bool|null
     */
    public ?bool $sms = null;

    /**
     * @var bool|null
     */
    public ?bool $mms = null;

    /**
     * @var bool|null
     */
    public ?bool $fax = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->voice = $data['voice'] ?? null;
        $this->sms = $data['sms'] ?? null;
        $this->mms = $data['mms'] ?? null;
        $this->fax = $data['fax'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->voice !== null) {
            $result['voice'] = $this->voice;
        }
        if ($this->sms !== null) {
            $result['sms'] = $this->sms;
        }
        if ($this->mms !== null) {
            $result['mms'] = $this->mms;
        }
        if ($this->fax !== null) {
            $result['fax'] = $this->fax;
        }
        return $result;
    }
}
