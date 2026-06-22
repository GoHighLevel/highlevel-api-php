<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * EmployeeResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class EmployeeResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var string
     */
    public string $mode;

    /**
     * @var array&lt;string&gt;
     */
    public array $channels;

    /**
     * @var float
     */
    public float $wait_time;

    /**
     * @var string
     */
    public string $wait_time_unit;

    /**
     * @var bool
     */
    public bool $sleep_enabled;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var array&lt;ActionsIdDto&gt;
     */
    public array $actions;

    /**
     * @var bool
     */
    public bool $is_primary;

    /**
     * @var float
     */
    public float $auto_pilot_max_messages;

    /**
     * @var string|null
     */
    public ?string $goal = null;

    /**
     * @var string|null
     */
    public ?string $personality = null;

    /**
     * @var string|null
     */
    public ?string $instructions = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $knowledge_base_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $sleep_on_manual_message = null;

    /**
     * @var bool|null
     */
    public ?bool $sleep_on_workflow_message = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->business_name = $data['businessName'] ?? null;
        $this->mode = $data['mode'] ?? '';
        $this->channels = $data['channels'] ?? [];
        $this->wait_time = $data['waitTime'] ?? 0;
        $this->wait_time_unit = $data['waitTimeUnit'] ?? '';
        $this->sleep_enabled = $data['sleepEnabled'] ?? false;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        // Handle array of ActionsIdDto objects
        if (isset($data['actions']) && is_array($data['actions'])) {
            $this->actions = array_map(function($item) {
                return is_array($item) ? new ActionsIdDto($item) : $item;
            }, $data['actions']);
        } else {
            $this->actions = $data['actions'] ?? [];
        }
        $this->is_primary = $data['isPrimary'] ?? false;
        $this->auto_pilot_max_messages = $data['autoPilotMaxMessages'] ?? 0;
        $this->goal = $data['goal'] ?? null;
        $this->personality = $data['personality'] ?? null;
        $this->instructions = $data['instructions'] ?? null;
        $this->knowledge_base_ids = $data['knowledgeBaseIds'] ?? null;
        $this->sleep_on_manual_message = $data['sleepOnManualMessage'] ?? null;
        $this->sleep_on_workflow_message = $data['sleepOnWorkflowMessage'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->business_name !== null) {
            $result['businessName'] = $this->business_name;
        }
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        if ($this->channels !== null) {
            $result['channels'] = $this->channels;
        }
        if ($this->wait_time !== null) {
            $result['waitTime'] = $this->wait_time;
        }
        if ($this->wait_time_unit !== null) {
            $result['waitTimeUnit'] = $this->wait_time_unit;
        }
        if ($this->sleep_enabled !== null) {
            $result['sleepEnabled'] = $this->sleep_enabled;
        }
        if ($this->sleep_time !== null) {
            $result['sleepTime'] = $this->sleep_time;
        }
        if ($this->sleep_time_unit !== null) {
            $result['sleepTimeUnit'] = $this->sleep_time_unit;
        }
        if ($this->actions !== null) {
            $result['actions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->actions);
        }
        if ($this->is_primary !== null) {
            $result['isPrimary'] = $this->is_primary;
        }
        if ($this->auto_pilot_max_messages !== null) {
            $result['autoPilotMaxMessages'] = $this->auto_pilot_max_messages;
        }
        if ($this->goal !== null) {
            $result['goal'] = $this->goal;
        }
        if ($this->personality !== null) {
            $result['personality'] = $this->personality;
        }
        if ($this->instructions !== null) {
            $result['instructions'] = $this->instructions;
        }
        if ($this->knowledge_base_ids !== null) {
            $result['knowledgeBaseIds'] = $this->knowledge_base_ids;
        }
        if ($this->sleep_on_manual_message !== null) {
            $result['sleepOnManualMessage'] = $this->sleep_on_manual_message;
        }
        if ($this->sleep_on_workflow_message !== null) {
            $result['sleepOnWorkflowMessage'] = $this->sleep_on_workflow_message;
        }
        return $result;
    }
}
