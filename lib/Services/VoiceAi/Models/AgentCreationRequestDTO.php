<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * AgentCreationRequestDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class AgentCreationRequestDTO
{
    /**
     * @var string|null
     */
    public ?string $location_id = null;

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
    public mixed $send_post_call_notification_to;

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
    public mixed $translation;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? null;
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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
