<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarNotificationResponseDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarNotificationResponseDTO
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $receiver_type = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $additional_email_ids = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $additional_phone_numbers = null;

    /**
     * @var string|null
     */
    public ?string $channel = null;

    /**
     * @var string|null
     */
    public ?string $notification_type = null;

    /**
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $additional_whatsapp_numbers = null;

    /**
     * @var string|null
     */
    public ?string $template_id = null;

    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var array&lt;SchedulesDTO&gt;|null
     */
    public ?array $after_time = null;

    /**
     * @var array&lt;SchedulesDTO&gt;|null
     */
    public ?array $before_time = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $selected_users = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

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
        $this->id = $data['_id'] ?? null;
        $this->receiver_type = $data['receiverType'] ?? null;
        $this->additional_email_ids = $data['additionalEmailIds'] ?? null;
        $this->additional_phone_numbers = $data['additionalPhoneNumbers'] ?? null;
        $this->channel = $data['channel'] ?? null;
        $this->notification_type = $data['notificationType'] ?? null;
        $this->is_active = $data['isActive'] ?? null;
        $this->additional_whatsapp_numbers = $data['additionalWhatsappNumbers'] ?? null;
        $this->template_id = $data['templateId'] ?? null;
        $this->body = $data['body'] ?? null;
        $this->subject = $data['subject'] ?? null;
        // Handle array of SchedulesDTO objects
        if (isset($data['afterTime']) && is_array($data['afterTime'])) {
            $this->after_time = array_map(function($item) {
                return is_array($item) ? new SchedulesDTO($item) : $item;
            }, $data['afterTime']);
        } else {
            $this->after_time = $data['afterTime'] ?? null;
        }
        // Handle array of SchedulesDTO objects
        if (isset($data['beforeTime']) && is_array($data['beforeTime'])) {
            $this->before_time = array_map(function($item) {
                return is_array($item) ? new SchedulesDTO($item) : $item;
            }, $data['beforeTime']);
        } else {
            $this->before_time = $data['beforeTime'] ?? null;
        }
        $this->selected_users = $data['selectedUsers'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
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
