<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ConversationAi\Models;

/**
 * FetchAIResponseDetailsResponseDTO model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class FetchAIResponseDetailsResponseDTO
{
    /**
     * @var string
     */
    public string $prompt;

    /**
     * @var string|null
     */
    public ?string $intent = null;

    /**
     * @var string
     */
    public string $response_message;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $faqs = null;

    /**
     * @var array&lt;mixed&gt;|null
     */
    public ?array $website = null;

    /**
     * @var string|null
     */
    public ?string $agent_id = null;

    /**
     * @var string|null
     */
    public ?string $input = null;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $action_logs;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $history;

    /**
     * @var string|null
     */
    public ?string $mode = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->prompt = $data['prompt'] ?? '';
        $this->intent = $data['intent'] ?? null;
        $this->response_message = $data['responseMessage'] ?? '';
        $this->faqs = $data['faqs'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->agent_id = $data['agentId'] ?? null;
        $this->input = $data['input'] ?? null;
        $this->action_logs = $data['actionLogs'] ?? [];
        $this->history = $data['history'] ?? [];
        $this->mode = $data['mode'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->prompt !== null) {
            $result['prompt'] = $this->prompt;
        }
        if ($this->intent !== null) {
            $result['intent'] = $this->intent;
        }
        if ($this->response_message !== null) {
            $result['responseMessage'] = $this->response_message;
        }
        if ($this->faqs !== null) {
            $result['faqs'] = $this->faqs;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->agent_id !== null) {
            $result['agentId'] = $this->agent_id;
        }
        if ($this->input !== null) {
            $result['input'] = $this->input;
        }
        if ($this->action_logs !== null) {
            $result['actionLogs'] = $this->action_logs;
        }
        if ($this->history !== null) {
            $result['history'] = $this->history;
        }
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        return $result;
    }
}
