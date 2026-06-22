<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * CreateTaskParams model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class CreateTaskParams
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var string
     */
    public string $due_date;

    /**
     * @var bool
     */
    public bool $completed;

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
        $this->title = $data['title'] ?? '';
        $this->body = $data['body'] ?? null;
        $this->due_date = $data['dueDate'] ?? '';
        $this->completed = $data['completed'] ?? false;
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->due_date !== null) {
            $result['dueDate'] = $this->due_date;
        }
        if ($this->completed !== null) {
            $result['completed'] = $this->completed;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        return $result;
    }
}
