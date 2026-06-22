<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * ReminderDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ReminderDto
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
     * @var string
     */
    public string $email_subject;

    /**
     * @var string
     */
    public string $reminder_id;

    /**
     * @var string
     */
    public string $reminder_name;

    /**
     * @var string
     */
    public string $reminder_time;

    /**
     * @var string
     */
    public string $interval_type;

    /**
     * @var float
     */
    public float $max_reminders;

    /**
     * @var string
     */
    public string $reminder_invoice_condition;

    /**
     * @var float
     */
    public float $reminder_number;

    /**
     * @var string|null
     */
    public ?string $start_time = null;

    /**
     * @var string|null
     */
    public ?string $end_time = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

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
        $this->email_subject = $data['emailSubject'] ?? '';
        $this->reminder_id = $data['reminderId'] ?? '';
        $this->reminder_name = $data['reminderName'] ?? '';
        $this->reminder_time = $data['reminderTime'] ?? '';
        $this->interval_type = $data['intervalType'] ?? '';
        $this->max_reminders = $data['maxReminders'] ?? 0;
        $this->reminder_invoice_condition = $data['reminderInvoiceCondition'] ?? '';
        $this->reminder_number = $data['reminderNumber'] ?? 0;
        $this->start_time = $data['startTime'] ?? null;
        $this->end_time = $data['endTime'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
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
        if ($this->email_subject !== null) {
            $result['emailSubject'] = $this->email_subject;
        }
        if ($this->reminder_id !== null) {
            $result['reminderId'] = $this->reminder_id;
        }
        if ($this->reminder_name !== null) {
            $result['reminderName'] = $this->reminder_name;
        }
        if ($this->reminder_time !== null) {
            $result['reminderTime'] = $this->reminder_time;
        }
        if ($this->interval_type !== null) {
            $result['intervalType'] = $this->interval_type;
        }
        if ($this->max_reminders !== null) {
            $result['maxReminders'] = $this->max_reminders;
        }
        if ($this->reminder_invoice_condition !== null) {
            $result['reminderInvoiceCondition'] = $this->reminder_invoice_condition;
        }
        if ($this->reminder_number !== null) {
            $result['reminderNumber'] = $this->reminder_number;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        return $result;
    }
}
