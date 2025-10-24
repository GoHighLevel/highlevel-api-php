<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * ProcessMessageBodyDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class ProcessMessageBodyDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $conversation_provider_id;

    /**
     * @var string|null
     */
    public ?string $html = null;

    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var string|null
     */
    public ?string $email_from = null;

    /**
     * @var string|null
     */
    public ?string $email_to = null;

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
    public ?string $email_message_id = null;

    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $direction = null;

    /**
     * @var string|null
     */
    public ?string $date = null;

    /**
     * @var mixed
     */
    public mixed $call;

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
        $this->attachments = $data['attachments'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->conversation_provider_id = $data['conversationProviderId'] ?? '';
        $this->html = $data['html'] ?? null;
        $this->subject = $data['subject'] ?? null;
        $this->email_from = $data['emailFrom'] ?? null;
        $this->email_to = $data['emailTo'] ?? null;
        $this->email_cc = $data['emailCc'] ?? null;
        $this->email_bcc = $data['emailBcc'] ?? null;
        $this->email_message_id = $data['emailMessageId'] ?? null;
        $this->alt_id = $data['altId'] ?? null;
        $this->direction = $data['direction'] ?? null;
        $this->date = $data['date'] ?? null;
        $this->call = $data['call'] ?? null;
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
