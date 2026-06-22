<?php

namespace HighLevel\Services\Store\Models;

/**
 * StoreOrderNotificationDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class StoreOrderNotificationDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string
     */
    public string $subject;

    /**
     * @var string
     */
    public string $email_template_id;

    /**
     * @var string
     */
    public string $default_email_template_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->subject = $data['subject'] ?? '';
        $this->email_template_id = $data['emailTemplateId'] ?? '';
        $this->default_email_template_id = $data['defaultEmailTemplateId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->email_template_id !== null) {
            $result['emailTemplateId'] = $this->email_template_id;
        }
        if ($this->default_email_template_id !== null) {
            $result['defaultEmailTemplateId'] = $this->default_email_template_id;
        }
        return $result;
    }
}
