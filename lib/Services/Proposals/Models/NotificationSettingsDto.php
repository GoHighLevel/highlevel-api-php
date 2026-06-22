<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * NotificationSettingsDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class NotificationSettingsDto
{
    /**
     * @var NotificationSendSettingDto
     */
    public NotificationSendSettingDto $receive;

    /**
     * @var NotificationSenderSettingDto
     */
    public NotificationSenderSettingDto $sender;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single NotificationSendSettingDto object
        if (isset($data['receive']) && is_array($data['receive'])) {
            $this->receive = new NotificationSendSettingDto($data['receive']);
        } else {
            $this->receive = $data['receive'] ?? null;
        }
        // Handle single NotificationSenderSettingDto object
        if (isset($data['sender']) && is_array($data['sender'])) {
            $this->sender = new NotificationSenderSettingDto($data['sender']);
        } else {
            $this->sender = $data['sender'] ?? null;
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
        if ($this->receive !== null) {
            $result['receive'] = is_object($this->receive) && method_exists($this->receive, 'toArray') 
                ? $this->receive->toArray() 
                : $this->receive;
        }
        if ($this->sender !== null) {
            $result['sender'] = is_object($this->sender) && method_exists($this->sender, 'toArray') 
                ? $this->sender->toArray() 
                : $this->sender;
        }
        return $result;
    }
}
