<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AgentStudio\Models;

/**
 * GetAgentByIdResponseDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class GetAgentByIdResponseDTO
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
     * @var string|null
     */
    public ?string $trace_id = null;

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
        $this->trace_id = $data['traceId'] ?? null;
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
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
