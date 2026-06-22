<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CustomActionParameters model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CustomActionParameters
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
     * @var mixed
     */
    public $api_details;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $selected_paths = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->trigger_prompt = $data['triggerPrompt'] ?? '';
        $this->trigger_message = $data['triggerMessage'] ?? '';
        $this->api_details = $data['apiDetails'] ?? null;
        $this->selected_paths = $data['selectedPaths'] ?? null;
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
        if ($this->api_details !== null) {
            $result['apiDetails'] = $this->api_details;
        }
        if ($this->selected_paths !== null) {
            $result['selectedPaths'] = $this->selected_paths;
        }
        return $result;
    }
}
