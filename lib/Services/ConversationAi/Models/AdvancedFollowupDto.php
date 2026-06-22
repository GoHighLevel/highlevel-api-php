<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * advancedFollowupDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class AdvancedFollowupDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string
     */
    public string $scenario_id;

    /**
     * @var array&lt;FollowupSequence&gt;
     */
    public array $followup_sequence;

    /**
     * @var mixed
     */
    public $followup_settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->scenario_id = $data['scenarioId'] ?? '';
        // Handle array of FollowupSequence objects
        if (isset($data['followupSequence']) && is_array($data['followupSequence'])) {
            $this->followup_sequence = array_map(function($item) {
                return is_array($item) ? new FollowupSequence($item) : $item;
            }, $data['followupSequence']);
        } else {
            $this->followup_sequence = $data['followupSequence'] ?? [];
        }
        $this->followup_settings = $data['followupSettings'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->scenario_id !== null) {
            $result['scenarioId'] = $this->scenario_id;
        }
        if ($this->followup_sequence !== null) {
            $result['followupSequence'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->followup_sequence);
        }
        if ($this->followup_settings !== null) {
            $result['followupSettings'] = $this->followup_settings;
        }
        return $result;
    }
}
