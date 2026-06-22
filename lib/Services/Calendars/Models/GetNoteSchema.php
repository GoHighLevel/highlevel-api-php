<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * GetNoteSchema model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class GetNoteSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var NoteCreatedBySchema|null
     */
    public ?NoteCreatedBySchema $created_by = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->body = $data['body'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        // Handle single NoteCreatedBySchema object
        if (isset($data['createdBy']) && is_array($data['createdBy'])) {
            $this->created_by = new NoteCreatedBySchema($data['createdBy']);
        } else {
            $this->created_by = $data['createdBy'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = is_object($this->created_by) && method_exists($this->created_by, 'toArray') 
                ? $this->created_by->toArray() 
                : $this->created_by;
        }
        return $result;
    }
}
