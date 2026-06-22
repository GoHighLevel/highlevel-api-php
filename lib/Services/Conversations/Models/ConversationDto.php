<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ConversationDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ConversationDto
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $last_message_body = null;

    /**
     * @var string|null
     */
    public ?string $last_message_date = null;

    /**
     * @var string|null
     */
    public ?string $last_message_type = null;

    /**
     * @var float|null
     */
    public ?float $unread_count = null;

    /**
     * @var bool|null
     */
    public ?bool $inbox = null;

    /**
     * @var bool|null
     */
    public ?bool $starred = null;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->last_message_body = $data['lastMessageBody'] ?? null;
        $this->last_message_date = $data['lastMessageDate'] ?? null;
        $this->last_message_type = $data['lastMessageType'] ?? null;
        $this->unread_count = $data['unreadCount'] ?? null;
        $this->inbox = $data['inbox'] ?? null;
        $this->starred = $data['starred'] ?? null;
        $this->deleted = $data['deleted'] ?? false;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->last_message_body !== null) {
            $result['lastMessageBody'] = $this->last_message_body;
        }
        if ($this->last_message_date !== null) {
            $result['lastMessageDate'] = $this->last_message_date;
        }
        if ($this->last_message_type !== null) {
            $result['lastMessageType'] = $this->last_message_type;
        }
        if ($this->unread_count !== null) {
            $result['unreadCount'] = $this->unread_count;
        }
        if ($this->inbox !== null) {
            $result['inbox'] = $this->inbox;
        }
        if ($this->starred !== null) {
            $result['starred'] = $this->starred;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        return $result;
    }
}
