<?php

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
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
        $this->email_subject = $data['emailSubject'] ?? null;
        $this->default_email_template_id = $data['defaultEmailTemplateId'] ?? null;
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
