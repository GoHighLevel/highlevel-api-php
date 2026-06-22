<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ConversationSchema model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ConversationSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $last_message_body;

    /**
     * @var string
     */
    public string $last_message_type;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var float
     */
    public float $unread_count;

    /**
     * @var string
     */
    public string $full_name;

    /**
     * @var string
     */
    public string $contact_name;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $phone;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->last_message_body = $data['lastMessageBody'] ?? '';
        $this->last_message_type = $data['lastMessageType'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->unread_count = $data['unreadCount'] ?? 0;
        $this->full_name = $data['fullName'] ?? '';
        $this->contact_name = $data['contactName'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->phone = $data['phone'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->last_message_body !== null) {
            $result['lastMessageBody'] = $this->last_message_body;
        }
        if ($this->last_message_type !== null) {
            $result['lastMessageType'] = $this->last_message_type;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->unread_count !== null) {
            $result['unreadCount'] = $this->unread_count;
        }
        if ($this->full_name !== null) {
            $result['fullName'] = $this->full_name;
        }
        if ($this->contact_name !== null) {
            $result['contactName'] = $this->contact_name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        return $result;
    }
}
