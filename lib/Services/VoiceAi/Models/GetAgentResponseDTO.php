<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * GetAgentResponseDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class GetAgentResponseDTO
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
    public mixed $send_post_call_notification_to;

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
    public mixed $translation;

    /**
     * @var array&lt;AgentActionResponseDTO&gt;
     */
    public array $actions;

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
        // Handle array of AgentActionResponseDTO objects
        if (isset($data['actions']) && is_array($data['actions'])) {
            $this->actions = array_map(function($item) {
                return is_array($item) ? new AgentActionResponseDTO($item) : $item;
            }, $data['actions']);
        } else {
            $this->actions = $data['actions'] ?? [];
        }
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
