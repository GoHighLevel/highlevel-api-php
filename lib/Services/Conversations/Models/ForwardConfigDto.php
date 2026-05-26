<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ForwardConfigDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ForwardConfigDto
{
    /**
     * @var bool
     */
    public bool $is_forwarded;

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
    public ?string $to_email = null;

    /**
     * @var string|null
     */
    public ?string $recipient_contact_id = null;

    /**
     * @var string|null
     */
    public ?string $recipient_conversation_id = null;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->is_forwarded = $data['isForwarded'] ?? false;
        $this->forward_whole_thread = $data['forwardWholeThread'] ?? null;
        $this->message_id = $data['messageId'] ?? null;
        $this->email_message_id = $data['emailMessageId'] ?? null;
        $this->source_contact_id = $data['sourceContactId'] ?? null;
        $this->source_conversation_id = $data['sourceConversationId'] ?? null;
        $this->to_email = $data['toEmail'] ?? null;
        $this->recipient_contact_id = $data['recipientContactId'] ?? null;
        $this->recipient_conversation_id = $data['recipientConversationId'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
