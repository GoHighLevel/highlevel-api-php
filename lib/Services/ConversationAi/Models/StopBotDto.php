<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * stopBotDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class StopBotDto
{
    /**
     * @var string
     */
    public string $stop_bot_detection_type;

    /**
     * @var string
     */
    public string $stop_bot_trigger_condition;

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
     * @var bool
     */
    public bool $enabled;

    /**
     * @var array&lt;string&gt;
     */
    public array $stop_bot_examples;

    /**
     * @var string
     */
    public string $final_message;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->stop_bot_detection_type = $data['stopBotDetectionType'] ?? '';
        $this->stop_bot_trigger_condition = $data['stopBotTriggerCondition'] ?? '';
        $this->reactivate_enabled = $data['reactivateEnabled'] ?? false;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->enabled = $data['enabled'] ?? false;
        $this->stop_bot_examples = $data['stopBotExamples'] ?? [];
        $this->final_message = $data['finalMessage'] ?? '';
        $this->tags = $data['tags'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->stop_bot_detection_type !== null) {
            $result['stopBotDetectionType'] = $this->stop_bot_detection_type;
        }
        if ($this->stop_bot_trigger_condition !== null) {
            $result['stopBotTriggerCondition'] = $this->stop_bot_trigger_condition;
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
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        if ($this->stop_bot_examples !== null) {
            $result['stopBotExamples'] = $this->stop_bot_examples;
        }
        if ($this->final_message !== null) {
            $result['finalMessage'] = $this->final_message;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        return $result;
    }
}
