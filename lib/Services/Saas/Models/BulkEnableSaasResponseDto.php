<?php

namespace HighLevel\Services\Saas\Models;

/**
 * BulkEnableSaasResponseDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class BulkEnableSaasResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var string|null
     */
    public ?string $bulk_action_url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->message = $data['message'] ?? '';
        $this->bulk_action_url = $data['bulkActionUrl'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->bulk_action_url !== null) {
            $result['bulkActionUrl'] = $this->bulk_action_url;
        }
        return $result;
    }
}
