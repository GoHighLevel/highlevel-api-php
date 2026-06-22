<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * NotificationSenderSettingDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class NotificationSenderSettingDto
{
    /**
     * @var string
     */
    public string $from_email;

    /**
     * @var string
     */
    public string $from_name;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->from_email = $data['fromEmail'] ?? '';
        $this->from_name = $data['fromName'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        return $result;
    }
}
