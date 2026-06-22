<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * PatchAgentDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class PatchAgentDTO
{
    /**
     * @var string|null
     */
    public ?string $agent_name = null;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var string|null
     */
    public ?string $welcome_message = null;

    /**
     * @var string|null
     */
    public ?string $agent_prompt = null;

    /**
     * @var string|null
     */
    public ?string $voice_id = null;

    /**
     * @var VoiceAILanguage|null
     */
    public ?VoiceAILanguage $language = null;

    /**
     * @var PatienceLevel|null
     */
    public ?PatienceLevel $patience_level = null;

    /**
     * @var float|null
     */
    public ?float $max_call_duration = null;

    /**
     * @var bool|null
     */
    public ?bool $send_user_idle_reminders = null;

    /**
     * @var float|null
     */
    public ?float $reminder_after_idle_time_seconds = null;

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
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * @var bool|null
     */
    public ?bool $is_agent_as_backup_disabled = null;

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
        $this->agent_name = $data['agentName'] ?? null;
        $this->business_name = $data['businessName'] ?? null;
        $this->welcome_message = $data['welcomeMessage'] ?? null;
        $this->agent_prompt = $data['agentPrompt'] ?? null;
        $this->voice_id = $data['voiceId'] ?? null;
        // Handle single VoiceAILanguage object
        if (isset($data['language']) && is_array($data['language'])) {
            $this->language = new VoiceAILanguage($data['language']);
        } else {
            $this->language = $data['language'] ?? null;
        }
        // Handle single PatienceLevel object
        if (isset($data['patienceLevel']) && is_array($data['patienceLevel'])) {
            $this->patience_level = new PatienceLevel($data['patienceLevel']);
        } else {
            $this->patience_level = $data['patienceLevel'] ?? null;
        }
        $this->max_call_duration = $data['maxCallDuration'] ?? null;
        $this->send_user_idle_reminders = $data['sendUserIdleReminders'] ?? null;
        $this->reminder_after_idle_time_seconds = $data['reminderAfterIdleTimeSeconds'] ?? null;
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
        $this->timezone = $data['timezone'] ?? null;
        $this->is_agent_as_backup_disabled = $data['isAgentAsBackupDisabled'] ?? null;
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
            $result['language'] = is_object($this->language) && method_exists($this->language, 'toArray') 
                ? $this->language->toArray() 
                : $this->language;
        }
        if ($this->patience_level !== null) {
            $result['patienceLevel'] = is_object($this->patience_level) && method_exists($this->patience_level, 'toArray') 
                ? $this->patience_level->toArray() 
                : $this->patience_level;
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
