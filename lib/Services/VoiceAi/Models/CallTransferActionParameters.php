<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallTransferActionParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallTransferActionParameters
{
    /**
     * @var string
     */
    public string $trigger_prompt;

    /**
     * @var string
     */
    public string $transfer_to_type;

    /**
     * @var string
     */
    public string $transfer_to_value;

    /**
     * @var string
     */
    public string $trigger_message;

    /**
     * @var bool|null
     */
    public ?bool $hear_whisper_message = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->trigger_prompt = $data['triggerPrompt'] ?? '';
        $this->transfer_to_type = $data['transferToType'] ?? '';
        $this->transfer_to_value = $data['transferToValue'] ?? '';
        $this->trigger_message = $data['triggerMessage'] ?? '';
        $this->hear_whisper_message = $data['hearWhisperMessage'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->trigger_prompt !== null) {
            $result['triggerPrompt'] = $this->trigger_prompt;
        }
        if ($this->transfer_to_type !== null) {
            $result['transferToType'] = $this->transfer_to_type;
        }
        if ($this->transfer_to_value !== null) {
            $result['transferToValue'] = $this->transfer_to_value;
        }
        if ($this->trigger_message !== null) {
            $result['triggerMessage'] = $this->trigger_message;
        }
        if ($this->hear_whisper_message !== null) {
            $result['hearWhisperMessage'] = $this->hear_whisper_message;
        }
        return $result;
    }
}
