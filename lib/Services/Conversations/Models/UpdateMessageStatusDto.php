<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * UpdateMessageStatusDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UpdateMessageStatusDto
{
    /**
     * @var string
     */
    public string $status;

    /**
     * @var mixed
     */
    public $error;

    /**
     * @var string|null
     */
    public ?string $email_message_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $recipients = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? '';
        $this->error = $data['error'] ?? null;
        $this->email_message_id = $data['emailMessageId'] ?? null;
        $this->recipients = $data['recipients'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->email_message_id !== null) {
            $result['emailMessageId'] = $this->email_message_id;
        }
        if ($this->recipients !== null) {
            $result['recipients'] = $this->recipients;
        }
        return $result;
    }
}
