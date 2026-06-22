<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * PostSubmissionCallToActionTargetDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class PostSubmissionCallToActionTargetDTO
{
    /**
     * @var string
     */
    public string $landing_page_url;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->landing_page_url = $data['landingPageUrl'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->landing_page_url !== null) {
            $result['landingPageUrl'] = $this->landing_page_url;
        }
        return $result;
    }
}
