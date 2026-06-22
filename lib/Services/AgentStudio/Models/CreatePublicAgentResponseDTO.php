<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * CreatePublicAgentResponseDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class CreatePublicAgentResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $agent;

    /**
     * @var array&lt;mixed&gt;
     */
    public array $versions;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->message = $data['message'] ?? '';
        $this->agent = $data['agent'] ?? null;
        $this->versions = $data['versions'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->agent !== null) {
            $result['agent'] = $this->agent;
        }
        if ($this->versions !== null) {
            $result['versions'] = $this->versions;
        }
        return $result;
    }
}
