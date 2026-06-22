<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallLogDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallLogDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string
     */
    public string $agent_id;

    /**
     * @var bool
     */
    public bool $is_agent_deleted;

    /**
     * @var string|null
     */
    public ?string $from_number = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var float
     */
    public float $duration;

    /**
     * @var bool
     */
    public bool $trial_call;

    /**
     * @var array&lt;CallActionSchema&gt;
     */
    public array $executed_call_actions;

    /**
     * @var string
     */
    public string $summary;

    /**
     * @var string
     */
    public string $transcript;

    /**
     * @var mixed
     */
    public $translation;

    /**
     * @var mixed
     */
    public $extracted_data;

    /**
     * @var string|null
     */
    public ?string $message_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->contact_id = $data['contactId'] ?? null;
        $this->agent_id = $data['agentId'] ?? '';
        $this->is_agent_deleted = $data['isAgentDeleted'] ?? false;
        $this->from_number = $data['fromNumber'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->duration = $data['duration'] ?? 0;
        $this->trial_call = $data['trialCall'] ?? false;
        // Handle array of CallActionSchema objects
        if (isset($data['executedCallActions']) && is_array($data['executedCallActions'])) {
            $this->executed_call_actions = array_map(function($item) {
                return is_array($item) ? new CallActionSchema($item) : $item;
            }, $data['executedCallActions']);
        } else {
            $this->executed_call_actions = $data['executedCallActions'] ?? [];
        }
        $this->summary = $data['summary'] ?? '';
        $this->transcript = $data['transcript'] ?? '';
        $this->translation = $data['translation'] ?? null;
        $this->extracted_data = $data['extractedData'] ?? null;
        $this->message_id = $data['messageId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->agent_id !== null) {
            $result['agentId'] = $this->agent_id;
        }
        if ($this->is_agent_deleted !== null) {
            $result['isAgentDeleted'] = $this->is_agent_deleted;
        }
        if ($this->from_number !== null) {
            $result['fromNumber'] = $this->from_number;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->trial_call !== null) {
            $result['trialCall'] = $this->trial_call;
        }
        if ($this->executed_call_actions !== null) {
            $result['executedCallActions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->executed_call_actions);
        }
        if ($this->summary !== null) {
            $result['summary'] = $this->summary;
        }
        if ($this->transcript !== null) {
            $result['transcript'] = $this->transcript;
        }
        if ($this->translation !== null) {
            $result['translation'] = $this->translation;
        }
        if ($this->extracted_data !== null) {
            $result['extractedData'] = $this->extracted_data;
        }
        if ($this->message_id !== null) {
            $result['messageId'] = $this->message_id;
        }
        return $result;
    }
}
