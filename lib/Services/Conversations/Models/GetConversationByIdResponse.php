<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * GetConversationByIdResponse model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetConversationByIdResponse
{
    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var bool
     */
    public bool $inbox;

    /**
     * @var float
     */
    public float $type;

    /**
     * @var float
     */
    public float $unread_count;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool|null
     */
    public ?bool $starred = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->inbox = $data['inbox'] ?? false;
        $this->type = $data['type'] ?? 0;
        $this->unread_count = $data['unreadCount'] ?? 0;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->id = $data['id'] ?? '';
        $this->starred = $data['starred'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->inbox !== null) {
            $result['inbox'] = $this->inbox;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->unread_count !== null) {
            $result['unreadCount'] = $this->unread_count;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->starred !== null) {
            $result['starred'] = $this->starred;
        }
        return $result;
    }
}
