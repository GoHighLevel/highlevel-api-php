<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * PostSubmissionInfoDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class PostSubmissionInfoDTO
{
    /**
     * @var mixed
     */
    public $message;

    /**
     * @var mixed
     */
    public $call_to_action;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? null;
        $this->call_to_action = $data['callToAction'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->call_to_action !== null) {
            $result['callToAction'] = $this->call_to_action;
        }
        return $result;
    }
}
