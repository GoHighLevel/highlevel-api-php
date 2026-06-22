<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ReminderSettingsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ReminderSettingsDto
{
    /**
     * @var string
     */
    public string $default_email_template_id;

    /**
     * @var array&lt;ReminderDto&gt;
     */
    public array $reminders;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->default_email_template_id = $data['defaultEmailTemplateId'] ?? '';
        // Handle array of ReminderDto objects
        if (isset($data['reminders']) && is_array($data['reminders'])) {
            $this->reminders = array_map(function($item) {
                return is_array($item) ? new ReminderDto($item) : $item;
            }, $data['reminders']);
        } else {
            $this->reminders = $data['reminders'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->default_email_template_id !== null) {
            $result['defaultEmailTemplateId'] = $this->default_email_template_id;
        }
        if ($this->reminders !== null) {
            $result['reminders'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->reminders);
        }
        return $result;
    }
}
