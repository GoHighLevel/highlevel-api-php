<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * PublishingProgressResponseDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class PublishingProgressResponseDTO
{
    /**
     * @var string
     */
    public string $campaign_id;

    /**
     * @var string
     */
    public string $publishing_status;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var float
     */
    public float $processed;

    /**
     * @var bool
     */
    public bool $is_complete;

    /**
     * @var bool
     */
    public bool $has_failed;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->campaign_id = $data['campaignId'] ?? '';
        $this->publishing_status = $data['publishingStatus'] ?? '';
        $this->total = $data['total'] ?? 0;
        $this->processed = $data['processed'] ?? 0;
        $this->is_complete = $data['isComplete'] ?? false;
        $this->has_failed = $data['hasFailed'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->campaign_id !== null) {
            $result['campaignId'] = $this->campaign_id;
        }
        if ($this->publishing_status !== null) {
            $result['publishingStatus'] = $this->publishing_status;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->processed !== null) {
            $result['processed'] = $this->processed;
        }
        if ($this->is_complete !== null) {
            $result['isComplete'] = $this->is_complete;
        }
        if ($this->has_failed !== null) {
            $result['hasFailed'] = $this->has_failed;
        }
        return $result;
    }
}
