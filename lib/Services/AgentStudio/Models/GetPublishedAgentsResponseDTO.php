<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * GetPublishedAgentsResponseDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class GetPublishedAgentsResponseDTO
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
     * @var array&lt;array&lt;string, mixed&gt;&gt;
     */
    public array $agents;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $pagination;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        $this->message = $data['message'] ?? '';
        $this->agents = $data['agents'] ?? [];
        $this->pagination = $data['pagination'] ?? null;
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
        if ($this->agents !== null) {
            $result['agents'] = $this->agents;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }
}
