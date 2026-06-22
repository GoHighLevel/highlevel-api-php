<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * EmailTemplateSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class EmailTemplateSchema
{
    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string|null
     */
    public ?string $html = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->subject = $data['subject'] ?? null;
        $this->attachments = $data['attachments'] ?? null;
        $this->html = $data['html'] ?? null;
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
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->html !== null) {
            $result['html'] = $this->html;
        }
        return $result;
    }
}
