<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * WrappedEditSessionCalendarResponseDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class WrappedEditSessionCalendarResponseDTO
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var float
     */
    public float $status_code;

    /**
     * @var EditSessionCalendarResponseDTO
     */
    public EditSessionCalendarResponseDTO $results;

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
        $this->status_code = $data['statusCode'] ?? 0;
        // Handle single EditSessionCalendarResponseDTO object
        if (isset($data['results']) && is_array($data['results'])) {
            $this->results = new EditSessionCalendarResponseDTO($data['results']);
        } else {
            $this->results = $data['results'] ?? null;
        }
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
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        if ($this->results !== null) {
            $result['results'] = is_object($this->results) && method_exists($this->results, 'toArray') 
                ? $this->results->toArray() 
                : $this->results;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
