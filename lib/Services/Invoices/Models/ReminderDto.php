<?php

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
