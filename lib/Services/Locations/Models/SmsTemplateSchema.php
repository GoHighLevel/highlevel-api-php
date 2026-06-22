<?php

namespace HighLevel\Services\Locations\Models;

/**
 * SmsTemplateSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class SmsTemplateSchema
{
    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $attachments = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->body = $data['body'] ?? null;
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
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        return $result;
    }
}
