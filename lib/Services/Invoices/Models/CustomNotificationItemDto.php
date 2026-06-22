<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * CustomNotificationItemDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CustomNotificationItemDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string
     */
    public string $email_template;

    /**
     * @var string
     */
    public string $sms_template;

    /**
     * @var string|null
     */
    public ?string $from_name = null;

    /**
     * @var string|null
     */
    public ?string $from_email = null;

    /**
     * @var string|null
     */
    public ?string $email_subject = null;

    /**
     * @var string|null
     */
    public ?string $default_email_template_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->email_template = $data['emailTemplate'] ?? '';
        $this->sms_template = $data['smsTemplate'] ?? '';
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->email_subject = $data['emailSubject'] ?? null;
        $this->default_email_template_id = $data['defaultEmailTemplateId'] ?? null;
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
        if ($this->email_template !== null) {
            $result['emailTemplate'] = $this->email_template;
        }
        if ($this->sms_template !== null) {
            $result['smsTemplate'] = $this->sms_template;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->email_subject !== null) {
            $result['emailSubject'] = $this->email_subject;
        }
        if ($this->default_email_template_id !== null) {
            $result['defaultEmailTemplateId'] = $this->default_email_template_id;
        }
        return $result;
    }
}
