<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * UpdateEmailMessageStatusDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UpdateEmailMessageStatusDto
{
    /**
     * @var mixed
     */
    public $events;

    /**
     * @var array&lt;UpdateRecipientMessageStatusDto&gt;|null
     */
    public ?array $recipients = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->events = $data['events'] ?? null;
        // Handle array of UpdateRecipientMessageStatusDto objects
        if (isset($data['recipients']) && is_array($data['recipients'])) {
            $this->recipients = array_map(function($item) {
                return is_array($item) ? new UpdateRecipientMessageStatusDto($item) : $item;
            }, $data['recipients']);
        } else {
            $this->recipients = $data['recipients'] ?? null;
        }
        $this->status = $data['status'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->events !== null) {
            $result['events'] = $this->events;
        }
        if ($this->recipients !== null) {
            $result['recipients'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->recipients);
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }
}
