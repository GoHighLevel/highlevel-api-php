<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * TaskSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class TaskSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var string|null
     */
    public ?string $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $due_date = null;

    /**
     * @var bool|null
     */
    public ?bool $completed = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->body = $data['body'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->due_date = $data['dueDate'] ?? null;
        $this->completed = $data['completed'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->due_date !== null) {
            $result['dueDate'] = $this->due_date;
        }
        if ($this->completed !== null) {
            $result['completed'] = $this->completed;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        return $result;
    }
}
