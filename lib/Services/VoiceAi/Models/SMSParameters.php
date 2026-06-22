<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * SMSParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class SMSParameters
{
    /**
     * @var string
     */
    public string $trigger_prompt;

    /**
     * @var string
     */
    public string $trigger_message;

    /**
     * @var string
     */
    public string $message_body;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->trigger_prompt = $data['triggerPrompt'] ?? '';
        $this->trigger_message = $data['triggerMessage'] ?? '';
        $this->message_body = $data['messageBody'] ?? '';
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
        if ($this->trigger_message !== null) {
            $result['triggerMessage'] = $this->trigger_message;
        }
        if ($this->message_body !== null) {
            $result['messageBody'] = $this->message_body;
        }
        return $result;
    }
}
