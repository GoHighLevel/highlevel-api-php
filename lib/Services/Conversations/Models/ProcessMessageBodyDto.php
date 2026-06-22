<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public string $contact_id;

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
    public $call;

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
        $this->contact_id = $data['contactId'] ?? '';
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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->conversation_id !== null) {
            $result['conversationId'] = $this->conversation_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->conversation_provider_id !== null) {
            $result['conversationProviderId'] = $this->conversation_provider_id;
        }
        if ($this->html !== null) {
            $result['html'] = $this->html;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->email_from !== null) {
            $result['emailFrom'] = $this->email_from;
        }
        if ($this->email_to !== null) {
            $result['emailTo'] = $this->email_to;
        }
        if ($this->email_cc !== null) {
            $result['emailCc'] = $this->email_cc;
        }
        if ($this->email_bcc !== null) {
            $result['emailBcc'] = $this->email_bcc;
        }
        if ($this->email_message_id !== null) {
            $result['emailMessageId'] = $this->email_message_id;
        }
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->direction !== null) {
            $result['direction'] = $this->direction;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->call !== null) {
            $result['call'] = $this->call;
        }
        return $result;
    }
}
