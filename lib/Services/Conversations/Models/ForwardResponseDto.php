<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ForwardResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ForwardResponseDto
{
    /**
     * @var bool|null
     */
    public ?bool $forward_whole_thread = null;

    /**
     * @var string|null
     */
    public ?string $message_id = null;

    /**
     * @var string|null
     */
    public ?string $email_message_id = null;

    /**
     * @var string|null
     */
    public ?string $source_contact_id = null;

    /**
     * @var string|null
     */
    public ?string $source_conversation_id = null;

    /**
     * @var string|null
     */
    public ?string $forward_to_email = null;

    /**
     * @var string|null
     */
    public ?string $recipient_contact_id = null;

    /**
     * @var string|null
     */
    public ?string $recipient_conversation_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->forward_whole_thread = $data['forwardWholeThread'] ?? null;
        $this->message_id = $data['messageId'] ?? null;
        $this->email_message_id = $data['emailMessageId'] ?? null;
        $this->source_contact_id = $data['sourceContactId'] ?? null;
        $this->source_conversation_id = $data['sourceConversationId'] ?? null;
        $this->forward_to_email = $data['forwardToEmail'] ?? null;
        $this->recipient_contact_id = $data['recipientContactId'] ?? null;
        $this->recipient_conversation_id = $data['recipientConversationId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->forward_whole_thread !== null) {
            $result['forwardWholeThread'] = $this->forward_whole_thread;
        }
        if ($this->message_id !== null) {
            $result['messageId'] = $this->message_id;
        }
        if ($this->email_message_id !== null) {
            $result['emailMessageId'] = $this->email_message_id;
        }
        if ($this->source_contact_id !== null) {
            $result['sourceContactId'] = $this->source_contact_id;
        }
        if ($this->source_conversation_id !== null) {
            $result['sourceConversationId'] = $this->source_conversation_id;
        }
        if ($this->forward_to_email !== null) {
            $result['forwardToEmail'] = $this->forward_to_email;
        }
        if ($this->recipient_contact_id !== null) {
            $result['recipientContactId'] = $this->recipient_contact_id;
        }
        if ($this->recipient_conversation_id !== null) {
            $result['recipientConversationId'] = $this->recipient_conversation_id;
        }
        return $result;
    }
}
