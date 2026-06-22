<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarNotification model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarNotification
{
    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var bool
     */
    public bool $should_send_to_contact;

    /**
     * @var bool
     */
    public bool $should_send_to_guest;

    /**
     * @var bool
     */
    public bool $should_send_to_user;

    /**
     * @var bool
     */
    public bool $should_send_to_selected_users;

    /**
     * @var string
     */
    public string $selected_users;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? null;
        $this->should_send_to_contact = $data['shouldSendToContact'] ?? false;
        $this->should_send_to_guest = $data['shouldSendToGuest'] ?? false;
        $this->should_send_to_user = $data['shouldSendToUser'] ?? false;
        $this->should_send_to_selected_users = $data['shouldSendToSelectedUsers'] ?? false;
        $this->selected_users = $data['selectedUsers'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->should_send_to_contact !== null) {
            $result['shouldSendToContact'] = $this->should_send_to_contact;
        }
        if ($this->should_send_to_guest !== null) {
            $result['shouldSendToGuest'] = $this->should_send_to_guest;
        }
        if ($this->should_send_to_user !== null) {
            $result['shouldSendToUser'] = $this->should_send_to_user;
        }
        if ($this->should_send_to_selected_users !== null) {
            $result['shouldSendToSelectedUsers'] = $this->should_send_to_selected_users;
        }
        if ($this->selected_users !== null) {
            $result['selectedUsers'] = $this->selected_users;
        }
        return $result;
    }
}
