<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * UpdateFollowupSettingsDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class UpdateFollowupSettingsDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $action_ids;

    /**
     * @var FollowupSettings
     */
    public FollowupSettings $followup_settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->action_ids = $data['actionIds'] ?? [];
        // Handle single FollowupSettings object
        if (isset($data['followupSettings']) && is_array($data['followupSettings'])) {
            $this->followup_settings = new FollowupSettings($data['followupSettings']);
        } else {
            $this->followup_settings = $data['followupSettings'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->action_ids !== null) {
            $result['actionIds'] = $this->action_ids;
        }
        if ($this->followup_settings !== null) {
            $result['followupSettings'] = is_object($this->followup_settings) && method_exists($this->followup_settings, 'toArray') 
                ? $this->followup_settings->toArray() 
                : $this->followup_settings;
        }
        return $result;
    }
}
