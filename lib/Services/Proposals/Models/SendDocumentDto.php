<?php

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
    public mixed $notification_settings;

    /**
     * @var string
     */
    public string $sent_by;

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
