<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * GetEmailMessageResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetEmailMessageResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var string
     */
    public string $thread_id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string
     */
    public string $conversation_id;

    /**
     * @var string
     */
    public string $date_added;

    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var string
     */
    public string $body;

    /**
     * @var string
     */
    public string $direction;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string
     */
    public string $content_type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string|null
     */
    public ?string $provider = null;

    /**
     * @var string
     */
    public string $from;

    /**
     * @var array&lt;string&gt;
     */
    public array $to;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $cc = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $bcc = null;

    /**
     * @var string|null
     */
    public ?string $reply_to_message_id = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $conversation_provider_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->alt_id = $data['altId'] ?? null;
        $this->thread_id = $data['threadId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->date_added = $data['dateAdded'] ?? '';
        $this->subject = $data['subject'] ?? null;
        $this->body = $data['body'] ?? '';
        $this->direction = $data['direction'] ?? '';
        $this->status = $data['status'] ?? null;
        $this->content_type = $data['contentType'] ?? '';
        $this->attachments = $data['attachments'] ?? null;
        $this->provider = $data['provider'] ?? null;
        $this->from = $data['from'] ?? '';
        $this->to = $data['to'] ?? [];
        $this->cc = $data['cc'] ?? null;
        $this->bcc = $data['bcc'] ?? null;
        $this->reply_to_message_id = $data['replyToMessageId'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->conversation_provider_id = $data['conversationProviderId'] ?? null;
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
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->thread_id !== null) {
            $result['threadId'] = $this->thread_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->direction !== null) {
            $result['direction'] = $this->direction;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->content_type !== null) {
            $result['contentType'] = $this->content_type;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->provider !== null) {
            $result['provider'] = $this->provider;
        }
        if ($this->from !== null) {
            $result['from'] = $this->from;
        }
        if ($this->to !== null) {
            $result['to'] = $this->to;
        }
        if ($this->cc !== null) {
            $result['cc'] = $this->cc;
        }
        if ($this->bcc !== null) {
            $result['bcc'] = $this->bcc;
        }
        if ($this->reply_to_message_id !== null) {
            $result['replyToMessageId'] = $this->reply_to_message_id;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->conversation_provider_id !== null) {
            $result['conversationProviderId'] = $this->conversation_provider_id;
        }
        return $result;
    }
}
