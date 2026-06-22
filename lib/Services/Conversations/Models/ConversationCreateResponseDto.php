<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ConversationCreateResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ConversationCreateResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $date_updated;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var bool
     */
    public bool $deleted;

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
    public string $last_message_date;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->date_updated = $data['dateUpdated'] ?? '';
        $this->date_added = $data['dateAdded'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->last_message_date = $data['lastMessageDate'] ?? '';
        $this->assigned_to = $data['assignedTo'] ?? null;
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
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->last_message_date !== null) {
            $result['lastMessageDate'] = $this->last_message_date;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        return $result;
    }
}
