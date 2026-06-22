<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * NotificationSendSettingDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class NotificationSendSettingDto
{
    /**
     * @var string
     */
    public string $template_id;

    /**
     * @var string
     */
    public string $subject;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->template_id = $data['templateId'] ?? '';
        $this->subject = $data['subject'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        return $result;
    }
}
