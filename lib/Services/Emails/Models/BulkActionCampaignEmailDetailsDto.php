<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * BulkActionCampaignEmailDetailsDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BulkActionCampaignEmailDetailsDto
{
    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var string|null
     */
    public ?string $from = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $template_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->subject = $data['subject'] ?? null;
        $this->from = $data['from'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->template_id = $data['templateId'] ?? null;
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
        if ($this->from !== null) {
            $result['from'] = $this->from;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        return $result;
    }
}
