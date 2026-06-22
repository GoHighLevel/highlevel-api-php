<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * UpdateCalendarNotificationsDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class UpdateCalendarNotificationsDTO
{
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
     * @var array&lt;string&gt;|null
     */
    public ?array $selected_users = null;

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
     * @var bool|null
     */
    public ?bool $deleted = null;

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
     * @var string|null
     */
    public ?string $from_address = null;

    /**
     * @var string|null
     */
    public ?string $from_number = null;

    /**
     * @var string|null
     */
    public ?string $from_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->receiver_type = $data['receiverType'] ?? null;
        $this->additional_email_ids = $data['additionalEmailIds'] ?? null;
        $this->additional_phone_numbers = $data['additionalPhoneNumbers'] ?? null;
        $this->selected_users = $data['selectedUsers'] ?? null;
        $this->channel = $data['channel'] ?? null;
        $this->notification_type = $data['notificationType'] ?? null;
        $this->is_active = $data['isActive'] ?? null;
        $this->deleted = $data['deleted'] ?? null;
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
        $this->from_address = $data['fromAddress'] ?? null;
        $this->from_number = $data['fromNumber'] ?? null;
        $this->from_name = $data['fromName'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->receiver_type !== null) {
            $result['receiverType'] = $this->receiver_type;
        }
        if ($this->additional_email_ids !== null) {
            $result['additionalEmailIds'] = $this->additional_email_ids;
        }
        if ($this->additional_phone_numbers !== null) {
            $result['additionalPhoneNumbers'] = $this->additional_phone_numbers;
        }
        if ($this->selected_users !== null) {
            $result['selectedUsers'] = $this->selected_users;
        }
        if ($this->channel !== null) {
            $result['channel'] = $this->channel;
        }
        if ($this->notification_type !== null) {
            $result['notificationType'] = $this->notification_type;
        }
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->after_time !== null) {
            $result['afterTime'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->after_time);
        }
        if ($this->before_time !== null) {
            $result['beforeTime'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->before_time);
        }
        if ($this->from_address !== null) {
            $result['fromAddress'] = $this->from_address;
        }
        if ($this->from_number !== null) {
            $result['fromNumber'] = $this->from_number;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        return $result;
    }
}
