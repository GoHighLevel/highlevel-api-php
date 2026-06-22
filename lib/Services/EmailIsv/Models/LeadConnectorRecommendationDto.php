<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\EmailIsv\Models;

/**
 * LeadConnectorRecommendationDto model
 * 
 * @package HighLevel\Services\EmailIsv\Models
 */
class LeadConnectorRecommendationDto
{
    /**
     * @var bool|null
     */
    public ?bool $is_email_valid = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->is_email_valid = $data['isEmailValid'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->is_email_valid !== null) {
            $result['isEmailValid'] = $this->is_email_valid;
        }
        return $result;
    }
}
