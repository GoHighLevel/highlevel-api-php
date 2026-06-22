<?php

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * ErrorDetailsDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class ErrorDetailsDTO
{
    /**
     * @var string
     */
    public string $stack;

    /**
     * @var string
     */
    public string $response;

    /**
     * @var float
     */
    public float $status;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $options = null;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var string
     */
    public string $name;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->stack = $data['stack'] ?? '';
        $this->response = $data['response'] ?? '';
        $this->status = $data['status'] ?? 0;
        $this->options = $data['options'] ?? null;
        $this->message = $data['message'] ?? '';
        $this->name = $data['name'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->stack !== null) {
            $result['stack'] = $this->stack;
        }
        if ($this->response !== null) {
            $result['response'] = $this->response;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->options !== null) {
            $result['options'] = $this->options;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }
}
