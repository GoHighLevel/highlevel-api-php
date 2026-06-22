<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * UploadFilesDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UploadFilesDto
{
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
    public string $location_id;

    /**
     * @var array&lt;string&gt;
     */
    public array $attachment_urls;

    /**
     * @var string|null
     */
    public ?string $chat_service_sid = null;

    /**
     * @var string|null
     */
    public ?string $is_group_sms = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->conversation_id = $data['conversationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->attachment_urls = $data['attachmentUrls'] ?? [];
        $this->chat_service_sid = $data['chatServiceSid'] ?? null;
        $this->is_group_sms = $data['isGroupSms'] ?? null;
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
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->attachment_urls !== null) {
            $result['attachmentUrls'] = $this->attachment_urls;
        }
        if ($this->chat_service_sid !== null) {
            $result['chatServiceSid'] = $this->chat_service_sid;
        }
        if ($this->is_group_sms !== null) {
            $result['isGroupSms'] = $this->is_group_sms;
        }
        return $result;
    }
}
