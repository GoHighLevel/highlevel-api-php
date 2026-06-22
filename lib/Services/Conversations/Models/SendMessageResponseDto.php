<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * SendMessageResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class SendMessageResponseDto
{
    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string|null
     */
    public ?string $email_message_id = null;

    /**
     * @var string
     */
    public string $message_id;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $message_ids = null;

    /**
     * @var string|null
     */
    public ?string $msg = null;

    /**
     * @var mixed
     */
    public $forward_data;

    /**
     * @var string
     */
    public string $status;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->email_message_id = $data['emailMessageId'] ?? null;
        $this->message_id = $data['messageId'] ?? '';
        $this->message_ids = $data['messageIds'] ?? null;
        $this->msg = $data['msg'] ?? null;
        $this->forward_data = $data['forwardData'] ?? null;
        $this->status = $data['status'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->email_message_id !== null) {
            $result['emailMessageId'] = $this->email_message_id;
        }
        if ($this->message_id !== null) {
            $result['messageId'] = $this->message_id;
        }
        if ($this->message_ids !== null) {
            $result['messageIds'] = $this->message_ids;
        }
        if ($this->msg !== null) {
            $result['msg'] = $this->msg;
        }
        if ($this->forward_data !== null) {
            $result['forwardData'] = $this->forward_data;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
