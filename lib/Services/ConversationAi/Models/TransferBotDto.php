<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * transferBotDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class TransferBotDto
{
    /**
     * @var string
     */
    public string $transfer_bot_type;

    /**
     * @var string
     */
    public string $transfer_to_bot;

    /**
     * @var bool
     */
    public bool $enabled;

    /**
     * @var string|null
     */
    public ?string $transfer_bot_trigger_condition = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $transfer_bot_examples = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->transfer_bot_type = $data['transferBotType'] ?? '';
        $this->transfer_to_bot = $data['transferToBot'] ?? '';
        $this->enabled = $data['enabled'] ?? false;
        $this->transfer_bot_trigger_condition = $data['transferBotTriggerCondition'] ?? null;
        $this->transfer_bot_examples = $data['transferBotExamples'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->transfer_bot_type !== null) {
            $result['transferBotType'] = $this->transfer_bot_type;
        }
        if ($this->transfer_to_bot !== null) {
            $result['transferToBot'] = $this->transfer_to_bot;
        }
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->transfer_bot_trigger_condition !== null) {
            $result['transferBotTriggerCondition'] = $this->transfer_bot_trigger_condition;
        }
        if ($this->transfer_bot_examples !== null) {
            $result['transferBotExamples'] = $this->transfer_bot_examples;
        }
        return $result;
    }
}
