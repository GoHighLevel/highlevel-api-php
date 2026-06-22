<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignABTestVariationPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignABTestVariationPublicV2Dto
{
    /**
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * @var string|null
     */
    public ?string $document_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->subject = $data['subject'] ?? null;
        $this->document_id = $data['documentId'] ?? null;
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
        if ($this->document_id !== null) {
            $result['documentId'] = $this->document_id;
        }
        return $result;
    }
}
