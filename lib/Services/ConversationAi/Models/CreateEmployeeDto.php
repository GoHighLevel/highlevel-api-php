<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * CreateEmployeeDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class CreateEmployeeDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $business_name = null;

    /**
     * @var string|null
     */
    public ?string $mode = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $channels = null;

    /**
     * @var bool|null
     */
    public ?bool $is_primary = null;

    /**
     * @var float|null
     */
    public ?float $wait_time = null;

    /**
     * @var string|null
     */
    public ?string $wait_time_unit = null;

    /**
     * @var bool|null
     */
    public ?bool $sleep_enabled = null;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var string
     */
    public string $personality;

    /**
     * @var string
     */
    public string $goal;

    /**
     * @var string
     */
    public string $instructions;

    /**
     * @var float|null
     */
    public ?float $auto_pilot_max_messages = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $knowledge_base_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $respond_to_images = null;

    /**
     * @var bool|null
     */
    public ?bool $respond_to_audio = null;

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
        $this->name = $data['name'] ?? '';
        $this->business_name = $data['businessName'] ?? null;
        $this->mode = $data['mode'] ?? null;
        $this->channels = $data['channels'] ?? null;
        $this->is_primary = $data['isPrimary'] ?? null;
        $this->wait_time = $data['waitTime'] ?? null;
        $this->wait_time_unit = $data['waitTimeUnit'] ?? null;
        $this->sleep_enabled = $data['sleepEnabled'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->personality = $data['personality'] ?? '';
        $this->goal = $data['goal'] ?? '';
        $this->instructions = $data['instructions'] ?? '';
        $this->auto_pilot_max_messages = $data['autoPilotMaxMessages'] ?? null;
        $this->knowledge_base_ids = $data['knowledgeBaseIds'] ?? null;
        $this->respond_to_images = $data['respondToImages'] ?? null;
        $this->respond_to_audio = $data['respondToAudio'] ?? null;
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
        if ($this->is_primary !== null) {
            $result['isPrimary'] = $this->is_primary;
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
        if ($this->personality !== null) {
            $result['personality'] = $this->personality;
        }
        if ($this->goal !== null) {
            $result['goal'] = $this->goal;
        }
        if ($this->instructions !== null) {
            $result['instructions'] = $this->instructions;
        }
        if ($this->auto_pilot_max_messages !== null) {
            $result['autoPilotMaxMessages'] = $this->auto_pilot_max_messages;
        }
        if ($this->knowledge_base_ids !== null) {
            $result['knowledgeBaseIds'] = $this->knowledge_base_ids;
        }
        if ($this->respond_to_images !== null) {
            $result['respondToImages'] = $this->respond_to_images;
        }
        if ($this->respond_to_audio !== null) {
            $result['respondToAudio'] = $this->respond_to_audio;
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
