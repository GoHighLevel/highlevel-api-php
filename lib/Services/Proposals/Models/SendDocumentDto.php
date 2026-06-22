<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * SendDocumentDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class SendDocumentDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $document_id;

    /**
     * @var string|null
     */
    public ?string $document_name = null;

    /**
     * @var string|null
     */
    public ?string $medium = null;

    /**
     * @var array&lt;CCRecipientItem&gt;|null
     */
    public ?array $cc_recipients = null;

    /**
     * @var mixed
     */
    public $notification_settings;

    /**
     * @var string
     */
    public string $sent_by;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->document_id = $data['documentId'] ?? '';
        $this->document_name = $data['documentName'] ?? null;
        $this->medium = $data['medium'] ?? null;
        // Handle array of CCRecipientItem objects
        if (isset($data['ccRecipients']) && is_array($data['ccRecipients'])) {
            $this->cc_recipients = array_map(function($item) {
                return is_array($item) ? new CCRecipientItem($item) : $item;
            }, $data['ccRecipients']);
        } else {
            $this->cc_recipients = $data['ccRecipients'] ?? null;
        }
        $this->notification_settings = $data['notificationSettings'] ?? null;
        $this->sent_by = $data['sentBy'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->document_id !== null) {
            $result['documentId'] = $this->document_id;
        }
        if ($this->document_name !== null) {
            $result['documentName'] = $this->document_name;
        }
        if ($this->medium !== null) {
            $result['medium'] = $this->medium;
        }
        if ($this->cc_recipients !== null) {
            $result['ccRecipients'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->cc_recipients);
        }
        if ($this->notification_settings !== null) {
            $result['notificationSettings'] = $this->notification_settings;
        }
        if ($this->sent_by !== null) {
            $result['sentBy'] = $this->sent_by;
        }
        return $result;
    }
}
