<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * UpdateConversationDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class UpdateConversationDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var float|null
     */
    public ?float $unread_count = null;

    /**
     * @var bool|null
     */
    public ?bool $starred = null;

    /**
     * @var string|null
     */
    public ?string $feedback = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->unread_count = $data['unreadCount'] ?? null;
        $this->starred = $data['starred'] ?? null;
        $this->feedback = $data['feedback'] ?? null;
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
        if ($this->unread_count !== null) {
            $result['unreadCount'] = $this->unread_count;
        }
        if ($this->starred !== null) {
            $result['starred'] = $this->starred;
        }
        if ($this->feedback !== null) {
            $result['feedback'] = $this->feedback;
        }
        return $result;
    }
}
