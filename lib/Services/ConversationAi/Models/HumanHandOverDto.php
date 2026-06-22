<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * humanHandOverDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class HumanHandOverDto
{
    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string
     */
    public string $trigger_condition;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $examples = null;

    /**
     * @var string|null
     */
    public ?string $assign_to_user_id = null;

    /**
     * @var bool|null
     */
    public ?bool $skip_assign_to_user = null;

    /**
     * @var bool|null
     */
    public ?bool $create_task = null;

    /**
     * @var bool
     */
    public bool $reactivate_enabled;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var string
     */
    public string $final_message;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * @var string
     */
    public string $handover_type;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enabled = $data['enabled'] ?? false;
        $this->trigger_condition = $data['triggerCondition'] ?? '';
        $this->examples = $data['examples'] ?? null;
        $this->assign_to_user_id = $data['assignToUserId'] ?? null;
        $this->skip_assign_to_user = $data['skipAssignToUser'] ?? null;
        $this->create_task = $data['createTask'] ?? null;
        $this->reactivate_enabled = $data['reactivateEnabled'] ?? false;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->final_message = $data['finalMessage'] ?? '';
        $this->tags = $data['tags'] ?? null;
        $this->handover_type = $data['handoverType'] ?? '';
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
        if ($this->trigger_condition !== null) {
            $result['triggerCondition'] = $this->trigger_condition;
        }
        if ($this->examples !== null) {
            $result['examples'] = $this->examples;
        }
        if ($this->assign_to_user_id !== null) {
            $result['assignToUserId'] = $this->assign_to_user_id;
        }
        if ($this->skip_assign_to_user !== null) {
            $result['skipAssignToUser'] = $this->skip_assign_to_user;
        }
        if ($this->create_task !== null) {
            $result['createTask'] = $this->create_task;
        }
        if ($this->reactivate_enabled !== null) {
            $result['reactivateEnabled'] = $this->reactivate_enabled;
        }
        if ($this->sleep_time_unit !== null) {
            $result['sleepTimeUnit'] = $this->sleep_time_unit;
        }
        if ($this->sleep_time !== null) {
            $result['sleepTime'] = $this->sleep_time;
        }
        if ($this->final_message !== null) {
            $result['finalMessage'] = $this->final_message;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->handover_type !== null) {
            $result['handoverType'] = $this->handover_type;
        }
        return $result;
    }
}
