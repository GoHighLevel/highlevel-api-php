<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * SetAccountsUnprocessableDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class SetAccountsUnprocessableDTO
{
    /**
     * @var float
     */
    public float $status;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $options = null;

    /**
     * @var array&lt;string&gt;
     */
    public array $message;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $error;

    /**
     * @var float
     */
    public float $status_code;

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
        $this->status = $data['status'] ?? 0;
        $this->options = $data['options'] ?? null;
        $this->message = $data['message'] ?? [];
        $this->name = $data['name'] ?? '';
        $this->error = $data['error'] ?? '';
        $this->status_code = $data['statusCode'] ?? 0;
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
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
