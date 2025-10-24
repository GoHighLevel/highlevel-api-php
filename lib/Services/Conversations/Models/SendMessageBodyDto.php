<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * SendMessageBodyDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class SendMessageBodyDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string|null
     */
    public ?string $appointment_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string|null
     */
    public ?string $email_from = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $email_cc = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $email_bcc = null;

    /**
     * @var string|null
     */
    public ?string $html = null;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var string|null
     */
    public ?string $reply_message_id = null;

    /**
     * @var string|null
     */
    public ?string $template_id = null;

    /**
     * @var string|null
     */
    public ?string $thread_id = null;

    /**
     * @var float|null
     */
    public ?float $scheduled_timestamp = null;

    /**
     * @var string|null
     */
    public ?string $conversation_provider_id = null;

    /**
     * @var string|null
     */
    public ?string $email_to = null;

    /**
     * @var string|null
     */
    public ?string $email_reply_mode = null;

    /**
     * @var string|null
     */
    public ?string $from_number = null;

    /**
     * @var string|null
     */
    public ?string $to_number = null;

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
        $this->type = $data['type'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->appointment_id = $data['appointmentId'] ?? null;
        $this->attachments = $data['attachments'] ?? null;
        $this->email_from = $data['emailFrom'] ?? null;
        $this->email_cc = $data['emailCc'] ?? null;
        $this->email_bcc = $data['emailBcc'] ?? null;
        $this->html = $data['html'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->subject = $data['subject'] ?? null;
        $this->reply_message_id = $data['replyMessageId'] ?? null;
        $this->template_id = $data['templateId'] ?? null;
        $this->thread_id = $data['threadId'] ?? null;
        $this->scheduled_timestamp = $data['scheduledTimestamp'] ?? null;
        $this->conversation_provider_id = $data['conversationProviderId'] ?? null;
        $this->email_to = $data['emailTo'] ?? null;
        $this->email_reply_mode = $data['emailReplyMode'] ?? null;
        $this->from_number = $data['fromNumber'] ?? null;
        $this->to_number = $data['toNumber'] ?? null;
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
