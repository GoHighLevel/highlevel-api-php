<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * PostSubmissionCallToActionDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class PostSubmissionCallToActionDTO
{
    /**
     * @var mixed
     */
    public $call_to_action_target;

    /**
     * @var string
     */
    public string $call_to_action_label;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->call_to_action_target = $data['callToActionTarget'] ?? null;
        $this->call_to_action_label = $data['callToActionLabel'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->call_to_action_target !== null) {
            $result['callToActionTarget'] = $this->call_to_action_target;
        }
        if ($this->call_to_action_label !== null) {
            $result['callToActionLabel'] = $this->call_to_action_label;
        }
        return $result;
    }
}
