<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
     * @var array&lt;string, mixed&gt;
     */
    public array $sub_type;

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
    public ?string $custom_subtype_id = null;

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
     * @var mixed
     */
    public $forward;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var bool|null
     */
    public ?bool $uses_native_scheduling_ai = null;

    /**
     * @var string|null
     */
    public ?string $optimization_period = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->sub_type = $data['subType'] ?? null;
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
        $this->custom_subtype_id = $data['customSubtypeId'] ?? null;
        $this->email_reply_mode = $data['emailReplyMode'] ?? null;
        $this->from_number = $data['fromNumber'] ?? null;
        $this->to_number = $data['toNumber'] ?? null;
        $this->forward = $data['forward'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->uses_native_scheduling_ai = $data['usesNativeSchedulingAi'] ?? null;
        $this->optimization_period = $data['optimizationPeriod'] ?? null;
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
        if ($this->sub_type !== null) {
            $result['subType'] = $this->sub_type;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->appointment_id !== null) {
            $result['appointmentId'] = $this->appointment_id;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->email_from !== null) {
            $result['emailFrom'] = $this->email_from;
        }
        if ($this->email_cc !== null) {
            $result['emailCc'] = $this->email_cc;
        }
        if ($this->email_bcc !== null) {
            $result['emailBcc'] = $this->email_bcc;
        }
        if ($this->html !== null) {
            $result['html'] = $this->html;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->reply_message_id !== null) {
            $result['replyMessageId'] = $this->reply_message_id;
        }
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->thread_id !== null) {
            $result['threadId'] = $this->thread_id;
        }
        if ($this->scheduled_timestamp !== null) {
            $result['scheduledTimestamp'] = $this->scheduled_timestamp;
        }
        if ($this->conversation_provider_id !== null) {
            $result['conversationProviderId'] = $this->conversation_provider_id;
        }
        if ($this->email_to !== null) {
            $result['emailTo'] = $this->email_to;
        }
        if ($this->custom_subtype_id !== null) {
            $result['customSubtypeId'] = $this->custom_subtype_id;
        }
        if ($this->email_reply_mode !== null) {
            $result['emailReplyMode'] = $this->email_reply_mode;
        }
        if ($this->from_number !== null) {
            $result['fromNumber'] = $this->from_number;
        }
        if ($this->to_number !== null) {
            $result['toNumber'] = $this->to_number;
        }
        if ($this->forward !== null) {
            $result['forward'] = $this->forward;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->uses_native_scheduling_ai !== null) {
            $result['usesNativeSchedulingAi'] = $this->uses_native_scheduling_ai;
        }
        if ($this->optimization_period !== null) {
            $result['optimizationPeriod'] = $this->optimization_period;
        }
        return $result;
    }
}
