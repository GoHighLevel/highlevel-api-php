<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignEmailMetaPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignEmailMetaPublicV2Dto
{
    /**
     * @var string
     */
    public string $subject;

    /**
     * @var string
     */
    public string $from_name;

    /**
     * @var string
     */
    public string $from_email;

    /**
     * @var string|null
     */
    public ?string $reply_to_address = null;

    /**
     * @var string|null
     */
    public ?string $preview_text = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->subject = $data['subject'] ?? '';
        $this->from_name = $data['fromName'] ?? '';
        $this->from_email = $data['fromEmail'] ?? '';
        $this->reply_to_address = $data['replyToAddress'] ?? null;
        $this->preview_text = $data['previewText'] ?? null;
        $this->attachments = $data['attachments'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        if ($this->reply_to_address !== null) {
            $result['replyToAddress'] = $this->reply_to_address;
        }
        if ($this->preview_text !== null) {
            $result['previewText'] = $this->preview_text;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        return $result;
    }
}
