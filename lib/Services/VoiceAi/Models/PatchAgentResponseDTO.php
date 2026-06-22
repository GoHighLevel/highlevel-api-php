<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * PatchAgentResponseDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class PatchAgentResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $agent_name;

    /**
     * @var string
     */
    public string $business_name;

    /**
     * @var string
     */
    public string $welcome_message;

    /**
     * @var string
     */
    public string $agent_prompt;

    /**
     * @var string
     */
    public string $voice_id;

    /**
     * @var string
     */
    public string $language;

    /**
     * @var string
     */
    public string $patience_level;

    /**
     * @var float
     */
    public float $max_call_duration;

    /**
     * @var bool
     */
    public bool $send_user_idle_reminders;

    /**
     * @var float
     */
    public float $reminder_after_idle_time_seconds;

    /**
     * @var string|null
     */
    public ?string $inbound_number = null;

    /**
     * @var string|null
     */
    public ?string $number_pool_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $call_end_workflow_ids = null;

    /**
     * @var mixed
     */
    public $send_post_call_notification_to;

    /**
     * @var array&lt;AgentWorkingHoursDTO&gt;|null
     */
    public ?array $agent_working_hours = null;

    /**
     * @var string
     */
    public string $timezone;

    /**
     * @var bool
     */
    public bool $is_agent_as_backup_disabled;

    /**
     * @var mixed
     */
    public $translation;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->agent_name = $data['agentName'] ?? '';
        $this->business_name = $data['businessName'] ?? '';
        $this->welcome_message = $data['welcomeMessage'] ?? '';
        $this->agent_prompt = $data['agentPrompt'] ?? '';
        $this->voice_id = $data['voiceId'] ?? '';
        $this->language = $data['language'] ?? '';
        $this->patience_level = $data['patienceLevel'] ?? '';
        $this->max_call_duration = $data['maxCallDuration'] ?? 0;
        $this->send_user_idle_reminders = $data['sendUserIdleReminders'] ?? false;
        $this->reminder_after_idle_time_seconds = $data['reminderAfterIdleTimeSeconds'] ?? 0;
        $this->inbound_number = $data['inboundNumber'] ?? null;
        $this->number_pool_id = $data['numberPoolId'] ?? null;
        $this->call_end_workflow_ids = $data['callEndWorkflowIds'] ?? null;
        $this->send_post_call_notification_to = $data['sendPostCallNotificationTo'] ?? null;
        // Handle array of AgentWorkingHoursDTO objects
        if (isset($data['agentWorkingHours']) && is_array($data['agentWorkingHours'])) {
            $this->agent_working_hours = array_map(function($item) {
                return is_array($item) ? new AgentWorkingHoursDTO($item) : $item;
            }, $data['agentWorkingHours']);
        } else {
            $this->agent_working_hours = $data['agentWorkingHours'] ?? null;
        }
        $this->timezone = $data['timezone'] ?? '';
        $this->is_agent_as_backup_disabled = $data['isAgentAsBackupDisabled'] ?? false;
        $this->translation = $data['translation'] ?? null;
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
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->agent_name !== null) {
            $result['agentName'] = $this->agent_name;
        }
        if ($this->business_name !== null) {
            $result['businessName'] = $this->business_name;
        }
        if ($this->welcome_message !== null) {
            $result['welcomeMessage'] = $this->welcome_message;
        }
        if ($this->agent_prompt !== null) {
            $result['agentPrompt'] = $this->agent_prompt;
        }
        if ($this->voice_id !== null) {
            $result['voiceId'] = $this->voice_id;
        }
        if ($this->language !== null) {
            $result['language'] = $this->language;
        }
        if ($this->patience_level !== null) {
            $result['patienceLevel'] = $this->patience_level;
        }
        if ($this->max_call_duration !== null) {
            $result['maxCallDuration'] = $this->max_call_duration;
        }
        if ($this->send_user_idle_reminders !== null) {
            $result['sendUserIdleReminders'] = $this->send_user_idle_reminders;
        }
        if ($this->reminder_after_idle_time_seconds !== null) {
            $result['reminderAfterIdleTimeSeconds'] = $this->reminder_after_idle_time_seconds;
        }
        if ($this->inbound_number !== null) {
            $result['inboundNumber'] = $this->inbound_number;
        }
        if ($this->number_pool_id !== null) {
            $result['numberPoolId'] = $this->number_pool_id;
        }
        if ($this->call_end_workflow_ids !== null) {
            $result['callEndWorkflowIds'] = $this->call_end_workflow_ids;
        }
        if ($this->send_post_call_notification_to !== null) {
            $result['sendPostCallNotificationTo'] = $this->send_post_call_notification_to;
        }
        if ($this->agent_working_hours !== null) {
            $result['agentWorkingHours'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->agent_working_hours);
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->is_agent_as_backup_disabled !== null) {
            $result['isAgentAsBackupDisabled'] = $this->is_agent_as_backup_disabled;
        }
        if ($this->translation !== null) {
            $result['translation'] = $this->translation;
        }
        return $result;
    }
}
