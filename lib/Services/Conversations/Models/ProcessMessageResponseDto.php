<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ProcessMessageResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ProcessMessageResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $message_id;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $email_message_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->message_id = $data['messageId'] ?? '';
        $this->message = $data['message'] ?? '';
        $this->contact_id = $data['contactId'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->email_message_id = $data['emailMessageId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->message_id !== null) {
            $result['messageId'] = $this->message_id;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->email_message_id !== null) {
            $result['emailMessageId'] = $this->email_message_id;
        }
        return $result;
    }
}
